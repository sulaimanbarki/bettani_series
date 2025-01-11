<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\IntroVideo\BulkDestroyIntroVideo;
use App\Http\Requests\Admin\IntroVideo\DestroyIntroVideo;
use App\Http\Requests\Admin\IntroVideo\IndexIntroVideo;
use App\Http\Requests\Admin\IntroVideo\StoreIntroVideo;
use App\Http\Requests\Admin\IntroVideo\UpdateIntroVideo;
use App\Models\DropDownMenu;
use App\Models\IntroVideo;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class IntroVideosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexIntroVideo $request
     * @return array|Factory|View
     */
    public function index(IndexIntroVideo $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(IntroVideo::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'title', 'order', 'platform', 'is_active'],

            // set columns to searchIn
            ['id', 'title', 'url', 'thumbnail', 'platform']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.intro-video.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.intro-video.create');

        $menus = DropDownMenu::where('is_active', 1)->select('slug', 'title')->get();

        return view('admin.intro-video.create', [
            'menus' => $menus
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreIntroVideo $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreIntroVideo $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the IntroVideo
        $introVideo = IntroVideo::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/intro-videos'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/intro-videos');
    }

    /**
     * Display the specified resource.
     *
     * @param IntroVideo $introVideo
     * @throws AuthorizationException
     * @return void
     */
    public function show(IntroVideo $introVideo)
    {
        $this->authorize('admin.intro-video.show', $introVideo);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param IntroVideo $introVideo
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(IntroVideo $introVideo)
    {
        $this->authorize('admin.intro-video.edit', $introVideo);

        $menus = DropDownMenu::where('is_active', 1)->select('slug', 'title')->get();

        return view('admin.intro-video.edit', [
            'introVideo' => $introVideo,
            'menus' => $menus
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateIntroVideo $request
     * @param IntroVideo $introVideo
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateIntroVideo $request, IntroVideo $introVideo)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values IntroVideo
        $introVideo->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/intro-videos'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/intro-videos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyIntroVideo $request
     * @param IntroVideo $introVideo
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyIntroVideo $request, IntroVideo $introVideo)
    {
        $introVideo->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyIntroVideo $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyIntroVideo $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    IntroVideo::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
