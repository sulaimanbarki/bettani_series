@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.intro-video.actions.edit', ['name' => $introVideo->title]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <intro-video-form
                :action="'{{ $introVideo->resource_url }}'"
                :data="{{ $introVideo->toJson() }}"
                :menus="{{ $menus->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.intro-video.actions.edit', ['name' => $introVideo->title]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.intro-video.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </intro-video-form>

        </div>
    
</div>

@endsection