@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.section.actions.create'))

@section('body')

<div class="container-xl">

    <div class="card">

        <section-form :action="'{{ url('admin/sections') }}'" :sections="{{$sections->toJson()}}" :books="{{$books->toJson()}}" :data="{{ json_encode($data) }}" v-cloak inline-template>

            <form class="form-horizontal form-create" method="post" @submit.prevent="onSubmit" :action="action" novalidate>

                <div class="card-header">
                    <i class="fa fa-plus"></i> {{ trans('admin.section.actions.create') }}
                </div>

                <div class="card-body">
                    @include('admin.section.components.form-elements')



                    <div class="form-check row">
                        <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">

                            @include('brackets/admin-ui::admin.includes.media-uploader', [
                            'mediaCollection' => app(App\Models\Section::class)->getMediaCollection('sections'),
                            'label' => 'Gallery'
                            ])
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" :disabled="submiting">
                        <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                        {{ trans('brackets/admin-ui::admin.btn.save') }}
                    </button>
                </div>

            </form>

        </section-form>

    </div>

</div>


@endsection