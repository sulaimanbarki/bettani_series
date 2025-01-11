<div class="form-group row align-items-center" :class="{'has-danger': errors.has('title'), 'has-success': fields.title && fields.title.valid }">
    <label for="title" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.drop-down-menu.columns.title') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.title" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('title'), 'form-control-success': fields.title && fields.title.valid}" id="title" name="title" placeholder="{{ trans('admin.drop-down-menu.columns.title') }}">
        <div v-if="errors.has('title')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('title') }}</div>
    </div>
</div>

{{-- <div class="form-group row align-items-center" :class="{'has-danger': errors.has('slug'), 'has-success': fields.slug && fields.slug.valid }">
    <label for="slug" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.drop-down-menu.columns.slug') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.slug" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('slug'), 'form-control-success': fields.slug && fields.slug.valid}" id="slug" name="slug" placeholder="{{ trans('admin.drop-down-menu.columns.slug') }}">
        <div v-if="errors.has('slug')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('slug') }}</div>
    </div>
</div> --}}

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('order'), 'has-success': fields.order && fields.order.valid }">
    <label for="order" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.drop-down-menu.columns.order') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.order" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('order'), 'form-control-success': fields.order && fields.order.valid}" id="order" name="order" placeholder="{{ trans('admin.drop-down-menu.columns.order') }}">
        <div v-if="errors.has('order')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('order') }}</div>
    </div>
</div>

{{-- <div class="form-group row align-items-center" :class="{'has-danger': errors.has('parent_id'), 'has-success': fields.parent_id && fields.parent_id.valid }">
    <label for="parent_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.drop-down-menu.columns.parent_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.parent_id" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('parent_id'), 'form-control-success': fields.parent_id && fields.parent_id.valid}" id="parent_id" name="parent_id" placeholder="{{ trans('admin.drop-down-menu.columns.parent_id') }}">
        <div v-if="errors.has('parent_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('parent_id') }}</div>
    </div>
</div> --}}

{{-- <div class="form-group row align-items-center" :class="{'has-danger': errors.has('category_id'), 'has-success': fields.category_id && fields.category_id.valid }">
    <label for="category_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.book.columns.category_id') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <multiselect v-model="form.category" :options="categories" :multiple="false" track-by="id" label="title" tag-placeholder="{{ __('Select Category') }}" placeholder="{{ __('Category') }}">
        </multiselect>
    </div>
</div> --}}

{{-- parent_id is a list of dropdown --}}
{{-- <div class="form-group row align-items-center" :class="{'has-danger': errors.has('parent_id'), 'has-success': fields.parent_id && fields.parent_id.valid }">
    <label for="parent_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">
        {{
            trans('admin.drop-down-menu.columns.parent_id')
        }}
    </label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        @{{menus}}

        <multiselect v-model="form.parent_id" :options="menus" :multiple="false" track-by="id" label="title" tag-placeholder="{{ __('Select Parent') }}" placeholder="{{ __('Parent') }}">
        </multiselect>
    </div>
</div> --}}
{{-- drop down list of menus from menue object --}}

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('parent_id'), 'has-success': fields.parent_id && fields.parent_id.valid }" >
    <label for="parent_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">
        {{
            trans('admin.drop-down-menu.columns.parent_id')
        }} 
    </label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <select class="form-control" v-model="form.parent_id" v-validate="" @input="validate($event)" id="parent_id" name="parent_id">
            <option value="">{{ __('Select Parent or leave it empty if it is independent menu') }}</option>
            <option v-for="menu in menus" :value="menu.parent_id">@{{ menu.title }}</option>
        </select>
        <div v-if="errors.has('parent_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('parent_id') }}</div>
    </div>
</div>



<div class="form-check row" :class="{'has-danger': errors.has('is_active'), 'has-success': fields.is_active && fields.is_active.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="is_active" type="checkbox" v-model="form.is_active" v-validate="''" data-vv-name="is_active"  name="is_active_fake_element">
        <label class="form-check-label" for="is_active">
            {{ trans('admin.drop-down-menu.columns.is_active') }}
        </label>
        <input type="hidden" name="is_active" :value="form.is_active">
        <div v-if="errors.has('is_active')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('is_active') }}</div>
    </div>
</div>


