<div class="form-group row align-items-center" :class="{'has-danger': errors.has('meta_description'), 'has-success': fields.meta_description && fields.meta_description.valid }">
    <label for="meta_description" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.page.columns.meta_description') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.meta_description" v-validate="''" id="meta_description" name="meta_description"></textarea>
        </div>
        <div v-if="errors.has('meta_description')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('meta_description') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('meta_keywords'), 'has-success': fields.meta_keywords && fields.meta_keywords.valid }">
    <label for="meta_keywords" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.page.columns.meta_keywords') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.meta_keywords" v-validate="''" id="meta_keywords" name="meta_keywords"></textarea>
        </div>
        <div v-if="errors.has('meta_keywords')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('meta_keywords') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('page_name'), 'has-success': fields.page_name && fields.page_name.valid }">
    <label for="page_name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.page.columns.page_name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.page_name" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('page_name'), 'form-control-success': fields.page_name && fields.page_name.valid}" id="page_name" name="page_name" placeholder="{{ trans('admin.page.columns.page_name') }}">
        <div v-if="errors.has('page_name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('page_name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('page_title'), 'has-success': fields.page_title && fields.page_title.valid }">
    <label for="page_title" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.page.columns.page_title') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.page_title" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('page_title'), 'form-control-success': fields.page_title && fields.page_title.valid}" id="page_title" name="page_title" placeholder="{{ trans('admin.page.columns.page_title') }}">
        <div v-if="errors.has('page_title')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('page_title') }}</div>
    </div>
</div>


