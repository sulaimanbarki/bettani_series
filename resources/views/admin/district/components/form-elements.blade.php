<div class="form-group row align-items-center" :class="{'has-danger': errors.has('district_name'), 'has-success': fields.district_name && fields.district_name.valid }">
    <label for="district_name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.district.columns.district_name') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.district_name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('district_name'), 'form-control-success': fields.district_name && fields.district_name.valid}" id="district_name" name="district_name" placeholder="{{ trans('admin.district.columns.district_name') }}">
        <div v-if="errors.has('district_name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('district_name') }}</div>
    </div>
</div>




<div class="form-group row align-items-center" :class="{'has-danger': errors.has('province_id'), 'has-success': this.fields.province_id && this.fields.province_id.valid }">
    <label for="province_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">Author</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <multiselect v-model="form.province" :options="provinces" :multiple="false" track-by="id" label="name" tag-placeholder="{{ __('Select province') }}" placeholder="{{ __('Province') }}">
        </multiselect>
        <div v-if="errors.has('province_id')" class="form-control-feedback form-text" v-cloak>@{{
            errors.first('province_id') }}
        </div>
    </div>
</div>