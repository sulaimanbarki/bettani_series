<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Zone;
use App\Models\District;
use App\Models\Province;
use Illuminate\View\View;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Brackets\AdminListing\Facades\AdminListing;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Auth\Access\AuthorizationException;
use App\Http\Requests\Admin\District\IndexDistrict;
use App\Http\Requests\Admin\District\StoreDistrict;
use App\Http\Requests\Admin\District\UpdateDistrict;
use App\Http\Requests\Admin\District\DestroyDistrict;
use App\Http\Requests\Admin\District\BulkDestroyDistrict;

class DistrictsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexDistrict $request
     * @return array|Factory|View
     */
    public function index(IndexDistrict $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(District::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'district_name', 'disable_enable_status', 'province_id'],

            // set columns to searchIn
            ['id', 'district_name', 'disable_enable_status', 'province_id'],
            function ($query) use ($request) {
                $query->with(['province']);

                // add this line if you want to search by author attributes
                $query->join('provinces', 'provinces.id', '=', 'districts.province_id');

                if ($request->has('provinces')) {
                    $query->whereIn('province_id', $request->get('provinces'));
                }
            }
        );

        $data->each(function ($item) {
            $item->province_id = $item->province->name;
        });

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.district.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.district.create');

        return view('admin.district.create', [
            'provinces' => Province::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreDistrict $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreDistrict $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();
        $sanitized['province_id'] = $request->getProvinceId();

        $district = District::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/districts'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/districts');
    }

    /**
     * Display the specified resource.
     *
     * @param District $district
     * @throws AuthorizationException
     * @return void
     */
    public function show(District $district)
    {
        $this->authorize('admin.district.show', $district);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param District $district
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(District $district)
    {
        $this->authorize('admin.district.edit', $district);

        $district->load('province');

        return view('admin.district.edit', [
            'district' => $district,
            'provinces' => Province::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateDistrict $request
     * @param District $district
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateDistrict $request, District $district)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();
        $sanitized['province_id'] = $request->getProvinceId();
        // Update changed values District
        $district->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/districts'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/districts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyDistrict $request
     * @param District $district
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyDistrict $request, District $district)
    {
        $district->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyDistrict $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyDistrict $request): Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    District::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }

    public function fetchDistricts($province_id)
    {
        $districts = District::where('province_id', $province_id)->select('id', 'district_name')->get();
        $zones = Zone::where('province_id', $province_id)->select('id', 'name')->get();
        return response()->json([$districts, $zones]);
    }
}
