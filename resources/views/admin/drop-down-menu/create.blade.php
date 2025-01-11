@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.drop-down-menu.actions.create'))

@section('body')

    <div class="container-xl">

        {{-- {{dd($menus)}} --}}
                <div class="card">
        <drop-down-menu-form
            :action="'{{ url('admin/drop-down-menus') }}'" :menus="{{$menus->toJson()}}" 
            v-cloak
            inline-template>
            <form class="form-horizontal form-create" method="post" @submit.prevent="onSubmit" :action="action" novalidate>

                <div class="card-header">
                    <i class="fa fa-plus"></i> {{ trans('admin.drop-down-menu.actions.create') }}
                </div>

                <div class="card-body">
                    @include('admin.drop-down-menu.components.form-elements')
                </div>
                                
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" :disabled="submiting">
                        <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                        {{ trans('brackets/admin-ui::admin.btn.save') }}
                    </button>
                </div>
                
            </form>

        </drop-down-menu-form>

        </div>

        </div>

    
@endsection