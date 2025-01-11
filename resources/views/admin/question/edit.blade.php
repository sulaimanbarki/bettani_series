@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.question.actions.edit', ['name' => $question->id]))

@section('body')

<div class="container-xl">
    <div class="card">

        <question-form :action="'{{ $question->resource_url }}'" :data="{{ $question->toJson() }}" :units="{{ $units->toJson() }}" v-cloak inline-template>

            <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                <div class="card-header">
                    <i class="fa fa-pencil"></i> {{ trans('admin.question.actions.edit', ['name' => $question->id]) }}
                </div>

                <div class="card-body">
                    @include('admin.question.components.form-elements')
                </div>


                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" :disabled="submiting">
                        <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                        {{ trans('brackets/admin-ui::admin.btn.save') }}
                    </button>
                </div>

            </form>

        </question-form>

    </div>

</div>

@endsection