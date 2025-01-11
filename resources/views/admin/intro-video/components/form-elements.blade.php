<div class="form-group row align-items-center" :class="{'has-danger': errors.has('title'), 'has-success': fields.title && fields.title.valid }">
    <label for="title" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.intro-video.columns.title') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.title" v-validate="''" id="title" name="title"></textarea>
        </div>
        <div v-if="errors.has('title')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('title') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('url'), 'has-success': fields.url && fields.url.valid }">
    <label for="url" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.intro-video.columns.url') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.url" v-validate="''" id="url" name="url"></textarea>
        </div>
        <div v-if="errors.has('url')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('url') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('thumbnail'), 'has-success': fields.thumbnail && fields.thumbnail.valid }">
    <label for="thumbnail" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.intro-video.columns.thumbnail') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.thumbnail" v-validate="''" id="thumbnail" name="thumbnail"></textarea>
        </div>
        <div v-if="errors.has('thumbnail')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('thumbnail') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('order'), 'has-success': fields.order && fields.order.valid }">
    <label for="order" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.intro-video.columns.order') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="number" v-model="form.order" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('order'), 'form-control-success': fields.order && fields.order.valid}" id="order" name="order" placeholder="{{ trans('admin.intro-video.columns.order') }}">
        <div v-if="errors.has('order')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('order') }}</div>
    </div>
</div>

{{-- <div class="form-group row align-items-center" :class="{'has-danger': errors.has('platform'), 'has-success': fields.platform && fields.platform.valid }">
    <label for="platform" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.intro-video.columns.platform') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.platform" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('platform'), 'form-control-success': fields.platform && fields.platform.valid}" id="platform" name="platform" placeholder="{{ trans('admin.intro-video.columns.platform') }}">
        <div v-if="errors.has('platform')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('platform') }}</div>
    </div>
</div> --}}

{{-- platform field is dropdown mobile or web --}}
<div class="form-group row align-items-center" :class="{'has-danger': errors.has('platform'), 'has-success': fields.platform && fields.platform.valid }">
    <label for="platform" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">Menu</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <select class="form-control" v-model="form.platform" v-validate="''" id="platform" name="platform">
            <option value="">Select Menu</option> 
            <option v-for="menu in menus" :value="menu.slug">@{{ menu.title }}</option>
        </select>
        {{-- <multiselect v-model="form.platform" :options="menus" :multiple="false" track-by="id" label="title" tag-placeholder="{{ __('Select Menu') }}" placeholder="{{ __('Menu') }}">
        </multiselect> --}}
        <div v-if="errors.has('platform')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('platform') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('is_active'), 'has-success': fields.is_active && fields.is_active.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="is_active" type="checkbox" v-model="form.is_active" v-validate="''" data-vv-name="is_active"  name="is_active_fake_element">
        <label class="form-check-label" for="is_active">
            {{ trans('admin.intro-video.columns.is_active') }}
        </label>
        <input type="hidden" name="is_active" :value="form.is_active">
        <div v-if="errors.has('is_active')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('is_active') }}</div>
    </div>
</div>


