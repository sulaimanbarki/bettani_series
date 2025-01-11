<?php

namespace App\Http\Controllers\Admin;

use App\Models\Question;
use App\Models\TestQuestion;
use Exception;
use Carbon\Carbon;
use App\Models\Test;
use App\Models\Province;
use App\Models\TestTake;
use App\Models\TestApply;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use App\Http\Requests\Admin\Test\IndexTest;
use App\Http\Requests\Admin\Test\StoreTest;
use App\Http\Requests\Admin\Test\UpdateTest;
use App\Http\Requests\Admin\Test\DestroyTest;
use Brackets\AdminListing\Facades\AdminListing;
use App\Http\Requests\Admin\Test\BulkDestroyTest;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Auth\Access\AuthorizationException;

class TestsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexTest $request
     * @return array|Factory|View
     */
    public function index(IndexTest $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Test::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'title', 'language', 'enabled', 'price', 'date', 'announce_date', 'last_date', 'is_finished'],

            // set columns to searchIn
            ['id', 'title', 'slug', 'description', 'language'],

            function ($query) use ($request) {
                $query->orderBy('id', 'desc');
            }
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.test.index', ['data' => $data]);
    }


    public function viewapplication(Request $request)
    {

        if ($request->ajax()) {
            $data = DB::table('tests')
                ->join('test_applies', 'tests.id', '=', 'test_applies.test_id')
                ->select('test_applies.name', 'test_applies.fname', 'test_applies.user_id', 'test_applies.cnic', 'test_applies.payment_status', 'password_value as password', 'test_applies.id as apply_id')
                ->where('tests.id', $request->test_id)
                ->when($request->province, function ($query) use ($request) {
                    return $query->where('test_applies.province', $request->province);
                })
                ->when($request->district, function ($query) use ($request) {
                    return $query->where('test_applies.district', $request->district);
                })
                ->when($request->zone, function ($query) use ($request) {
                    return $query->where('test_applies.zone', $request->zone);
                })
                ->get()->toArray();

            // foreach data item in data array select marks from test_takes table based on cnic
            foreach ($data as $key => $value) {
                $marks = TestTake::where('test_id', $request->test_id)->where('cnic', $value->cnic)->first();
                if ($marks) {
                    $data[$key]->marks = $marks->marks;
                } else {
                    $data[$key]->marks = 0;
                }
            }

            // sort data array based on marks in descending order
//            usort($data, function ($a, $b) {
//                return $b->marks <=> $a->marks;
//            });

            // add SNo
            foreach ($data as $key => $value) {
                $data[$key]->sno = $key + 1;
            }


            return response()->json($data);
        }

        $where = [];
        if ($request->has('test_id')) {
            $where['test_id'] = $request->test_id;
        }

        $applications = TestApply::where($where)->get();

        // add sno to applications
        foreach ($applications as $key => $value) {
            $applications[$key]->sno = $key + 1;
        }
        $test = Test::find($request->test_id);
        $provinces = Province::all();

        return view('admin.test.application', ['data' => $applications, 'test' => $test, 'provinces' => $provinces]);
    }
    // editapplication
    public function editapplication(Request $request, $id)
    {
        $application = TestApply::findOrfail($id);

        // check if test is taken or not
        $test_taken = TestTake::where('cnic', $application->cnic)->where('test_id', $application->test_id)->first();

        if (!$test_taken) {
            return redirect()->back()->with('error', 'Test not taken yet');
        }

        $provinces = Province::all();

        $test_questions = TestQuestion::where('test_id', $application->test_id)->where('test_take_id', $test_taken->id)->get();
        return view('admin.test.editapplication', ['application' => $application, 'provinces' => $provinces, 'test_questions' => $test_questions, 'test_taken' => $test_taken]);
    }

    // updateapplication
    public function updateapplication(Request $request, $id)
    {
        // loop through request and modify key that hase format a1, a2, a3 etc and convert the key to 1, 2, 3 etc
        $data = [];
        foreach ($request->all() as $key => $value) {
            if (strpos($key, 'a') !== false) {
                $data[str_replace('a', '', $key)] = $value;
            }
        }

        $marks = 0;

        foreach ($data as $item => $value) {
            $test_question = TestQuestion::find($item);
            if ($test_question) {
                $test_question->result = $value;
                $test_question->update();

                $question = Question::find($test_question->question_id);
                if (!$question) {
                    continue;
                }

                if ($question->answer == $value) {
                    $marks++;
                }
            }

        }

        $test_taken = TestTake::find($id);
        $test_taken->marks = $marks;
        $test_taken->is_completed = $request->is_completed;
        $test_taken->update();

        // redirect to route 'paymentDetails' with $test_taken->test_id as parameter ?test_id=8
        return redirect()->route('paymentDetails', ['test_id' => $test_taken->test_id]);
    }
    public function create()
    {
        $this->authorize('admin.test.create');

        return view('admin.test.create');
    }

    // destroyapplication
    public function destroyapplication($id)
    {
        $application = TestApply::findOrfail($id);
        $application->delete();

        return redirect()->back()->with('success', 'Application deleted successfully');
    }
    public function store(StoreTest $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Test
        $test = Test::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/tests'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/tests');
    }

    /**
     * Display the specified resource.
     *
     * @param Test $test
     * @throws AuthorizationException
     * @return void
     */
    public function show(Test $test)
    {
        $this->authorize('admin.test.show', $test);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Test $test
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Test $test)
    {
        $this->authorize('admin.test.edit', $test);


        return view('admin.test.edit', [
            'test' => $test,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateTest $request
     * @param Test $test
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateTest $request, Test $test)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // return $sanitized;

        // Update changed values Test
        $test->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/tests'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/tests');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyTest $request
     * @param Test $test
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyTest $request, Test $test)
    {
        $test->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyTest $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyTest $request): Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    DB::table('tests')->whereIn('id', $bulkChunk)
                        ->update([
                            'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
                        ]);

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
