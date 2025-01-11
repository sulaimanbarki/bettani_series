<div class="form-group row align-items-center" :class="{'has-danger': errors.has('title'), 'has-success': fields.title && fields.title.valid }">
    <label for="title" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.sub-menu.columns.title') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.title" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('title'), 'form-control-success': fields.title && fields.title.valid}" id="title" name="title" placeholder="{{ trans('admin.sub-menu.columns.title') }}">
        <div v-if="errors.has('title')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('title') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('slug'), 'has-success': fields.slug && fields.slug.valid }">
    <label for="slug" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.sub-menu.columns.slug') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.slug" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('slug'), 'form-control-success': fields.slug && fields.slug.valid}" id="slug" name="slug" placeholder="{{ trans('admin.sub-menu.columns.slug') }}">
        <div v-if="errors.has('slug')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('slug') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('icon_url'), 'has-success': fields.icon_url && fields.icon_url.valid }">
    <label for="icon_url" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.sub-menu.columns.icon_url') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.icon_url" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('icon_url'), 'form-control-success': fields.icon_url && fields.icon_url.valid}" id="icon_url" name="icon_url" placeholder="{{ trans('admin.sub-menu.columns.icon_url') }}">
        <div v-if="errors.has('icon_url')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('icon_url') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('order'), 'has-success': fields.order && fields.order.valid }">
    <label for="order" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.sub-menu.columns.order') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.order" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('order'), 'form-control-success': fields.order && fields.order.valid}" id="order" name="order" placeholder="{{ trans('admin.sub-menu.columns.order') }}">
        <div v-if="errors.has('order')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('order') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('is_active'), 'has-success': fields.is_active && fields.is_active.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="is_active" type="checkbox" v-model="form.is_active" v-validate="''" data-vv-name="is_active"  name="is_active_fake_element">
        <label class="form-check-label" for="is_active">
            {{ trans('admin.sub-menu.columns.is_active') }}
        </label>
        <input type="hidden" name="is_active" :value="form.is_active">
        <div v-if="errors.has('is_active')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('is_active') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('menu_id'), 'has-success': fields.menu_id && fields.menu_id.valid }">
    <label for="menu_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.sub-menu.columns.menu_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.menu_id" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('menu_id'), 'form-control-success': fields.menu_id && fields.menu_id.valid}" id="menu_id" name="menu_id" placeholder="{{ trans('admin.sub-menu.columns.menu_id') }}">
        <div v-if="errors.has('menu_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('menu_id') }}</div>
    </div>
</div>


