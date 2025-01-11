@extends('brackets/admin-ui::admin.layout.default')

@section('title', 'Create Zone')

@section('body')

    <div class="container-xl">

                <div class="card">
        
        <zone-form
            :action="'{{ url('admin/zones') }}'" :provinces="{{$provinces->toJson()}}"
            v-cloak
            inline-template>

            <form class="form-horizontal form-create" method="post" @submit.prevent="onSubmit" :action="action" novalidate>
                
                <div class="card-header">
                    <i class="fa fa-plus"></i> Create Zone
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