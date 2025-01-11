<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Zone\BulkDestroyZone;
use App\Http\Requests\Admin\Zone\DestroyZone;
use App\Http\Requests\Admin\Zone\IndexZone;
use App\Http\Requests\Admin\Zone\StoreZone;
use App\Http\Requests\Admin\Zone\UpdateZone;
use App\Models\Zone;
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

class ZonesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexZone $request
     * @return array|Factory|View
     */
    public function index(IndexZone $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Zone::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'name', 'province_id'],

            // set columns to searchIn
            ['id', 'name']
        );
        
        $data->each(function ($item) {
            $item->province_id = $item->load('province')->province->name;
        });

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.zone.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.zone.create');

        return view('admin.zone.create', [
            'provinces' => DB::table('provinces')->select('name', 'id')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreZone $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreZone $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();
        $sanitized['province_id'] = $request->getProvinceId();

        // Store the Zone
        $zone = Zone::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/zones'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/zones');
    }

    /**
     * Display the specified resource.
     *
     * @param Zone $zone
     * @throws AuthorizationException
     * @return void
     */
    public function show(Zone $zone)
    {
        $this->authorize('admin.zone.show', $zone);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Zone $zone
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Zone $zone)
    {
        $this->authorize('admin.zone.edit', $zone);


        return view('admin.zone.edit', [
            'zone' => $zone,
            'provinces' => DB::table('provinces')->select('name', 'id')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateZone $request
     * @param Zone $zone
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateZone $request, Zone $zone)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Zone
        $zone->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/zones'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/zones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyZone $request
     * @param Zone $zone
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyZone $request, Zone $zone)
    {
        $zone->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyZone $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyZone $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Zone::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
