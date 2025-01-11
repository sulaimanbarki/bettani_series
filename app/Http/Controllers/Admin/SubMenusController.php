<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SubMenu\BulkDestroySubMenu;
use App\Http\Requests\Admin\SubMenu\DestroySubMenu;
use App\Http\Requests\Admin\SubMenu\IndexSubMenu;
use App\Http\Requests\Admin\SubMenu\StoreSubMenu;
use App\Http\Requests\Admin\SubMenu\UpdateSubMenu;
use App\Models\SubMenu;
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

class SubMenusController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexSubMenu $request
     * @return array|Factory|View
     */
    public function index(IndexSubMenu $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(SubMenu::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'title', 'icon_url', 'order', 'is_active', 'menu_id'],

            // set columns to searchIn
            ['id', 'title', 'slug', 'icon_url']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.sub-menu.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.sub-menu.create');

        return view('admin.sub-menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreSubMenu $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreSubMenu $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the SubMenu
        $subMenu = SubMenu::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/sub-menus'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/sub-menus');
    }

    /**
     * Display the specified resource.
     *
     * @param SubMenu $subMenu
     * @throws AuthorizationException
     * @return void
     */
    public function show(SubMenu $subMenu)
    {
        $this->authorize('admin.sub-menu.show', $subMenu);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param SubMenu $subMenu
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(SubMenu $subMenu)
    {
        $this->authorize('admin.sub-menu.edit', $subMenu);


        return view('admin.sub-menu.edit', [
            'subMenu' => $subMenu,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateSubMenu $request
     * @param SubMenu $subMenu
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateSubMenu $request, SubMenu $subMenu)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values SubMenu
        $subMenu->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/sub-menus'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/sub-menus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroySubMenu $request
     * @param SubMenu $subMenu
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroySubMenu $request, SubMenu $subMenu)
    {
        $subMenu->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroySubMenu $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroySubMenu $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    SubMenu::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
