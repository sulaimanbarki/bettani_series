<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DropDownMenu\BulkDestroyDropDownMenu;
use App\Http\Requests\Admin\DropDownMenu\DestroyDropDownMenu;
use App\Http\Requests\Admin\DropDownMenu\IndexDropDownMenu;
use App\Http\Requests\Admin\DropDownMenu\StoreDropDownMenu;
use App\Http\Requests\Admin\DropDownMenu\UpdateDropDownMenu;
use App\Models\DropDownMenu;
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

class DropDownMenusController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexDropDownMenu $request
     * @return array|Factory|View
     */
    public function index(IndexDropDownMenu $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(DropDownMenu::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'title', 'order', 'parent_id', 'is_active'],

            // set columns to searchIn
            ['id', 'title', 'slug']
        );

        $data->transform(function ($item) {
            $parent = DropDownMenu::where('id', $item->parent_id)->first();
            $item->parent_id = $item->parent_id ? $parent->title : null;
            return $item;
        });

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.drop-down-menu.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.drop-down-menu.create');

        $menus = DropDownMenu::where('parent_id', null)->where('is_active', 1)->select('id AS parent_id', 'title')->get();

        return view('admin.drop-down-menu.create', [ 'menus' => $menus ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreDropDownMenu $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreDropDownMenu $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        $sanitized['slug'] = str_slug($sanitized['title']);

        // Store the DropDownMenu
        $dropDownMenu = DropDownMenu::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/drop-down-menus'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/drop-down-menus');
    }

    /**
     * Display the specified resource.
     *
     * @param DropDownMenu $dropDownMenu
     * @throws AuthorizationException
     * @return void
     */
    public function show(DropDownMenu $dropDownMenu)
    {
        $this->authorize('admin.drop-down-menu.show', $dropDownMenu);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param DropDownMenu $dropDownMenu
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(DropDownMenu $dropDownMenu)
    {
        $this->authorize('admin.drop-down-menu.edit', $dropDownMenu);

        $menus = DropDownMenu::where('parent_id', null)->where('is_active', 1)->select('id AS parent_id', 'title')->get();

        return view('admin.drop-down-menu.edit', [
            'dropDownMenu' => $dropDownMenu,
            'menus' => $menus
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateDropDownMenu $request
     * @param DropDownMenu $dropDownMenu
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateDropDownMenu $request, DropDownMenu $dropDownMenu)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        $sanitized['slug'] = str_slug($sanitized['title']);

        // Update changed values DropDownMenu
        $dropDownMenu->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/drop-down-menus'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/drop-down-menus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyDropDownMenu $request
     * @param DropDownMenu $dropDownMenu
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyDropDownMenu $request, DropDownMenu $dropDownMenu)
    {
        $dropDownMenu->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyDropDownMenu $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyDropDownMenu $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    DropDownMenu::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
