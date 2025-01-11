@extends('brackets/admin-ui::admin.layout.default')

@section('title', 'Edit ' . $zone->name)

@section('body')

    <div class="container-xl">
        <div class="card">

            <zone-form
                :action="'{{ $zone->resource_url }}'" :provinces="{{ $provinces->toJson() }}"
                :data="{{ $zone->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.province.actions.edit', ['name' => $zone->name]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.zone.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </zone-form>

        </div>
    
</div>

@endsection