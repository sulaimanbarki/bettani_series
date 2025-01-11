@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.drop-down-menu.actions.edit', ['name' => $dropDownMenu->title]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <drop-down-menu-form
                :action="'{{ $dropDownMenu->resource_url }}'"
                :data="{{ $dropDownMenu->toJson() }}"
                :menus="{{ $menus->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.drop-down-menu.actions.edit', ['name' => $dropDownMenu->title]) }}
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