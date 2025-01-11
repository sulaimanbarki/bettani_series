<div class="form-group row align-items-center"
    :class="{ 'has-danger': errors.has('title'), 'has-success': fields.title && fields.title.valid }">
    <label for="title" class="col-form-label text-md-right"
        :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.test.columns.title') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.title" v-validate="'required'" @input="validate($event)" class="form-control"
            :class="{ 'form-control-danger': errors.has('title'), 'form-control-success': fields.title && fields.title.valid }"
            id="title" name="title" placeholder="{{ trans('admin.test.columns.title') }}">
        <div v-if="errors.has('title')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('title') }}</div>
    </div>
</div>



<div class="form-group row align-items-center"
    :class="{ 'has-danger': errors.has('description'), 'has-success': fields.description && fields.description.valid }">
    <label for="description" class="col-form-label text-md-right"
        :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.test.columns.description') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <wysiwyg v-model="form.description" v-validate="''" id="description" name="description"
                :config="mediaWysiwygConfig"></wysiwyg>
        </div>
        <div v-if="errors.has('description')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('description') }}
        </div>
    </div>
</div>

<div class="form-group row align-items-center"
    :class="{ 'has-danger': errors.has('language'), 'has-success': fields.language && fields.language.valid }">
    <label for="language" class="col-form-label text-md-right"
        :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.test.columns.language') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.language" v-validate="'required'" @input="validate($event)"
            class="form-control"
            :class="{ 'form-control-danger': errors.has('language'), 'form-control-success': fields.language && fields.language
                    .valid }"
            id="language" name="language" placeholder="{{ trans('admin.test.columns.language') }}">
        <div v-if="errors.has('language')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('language') }}</div>
    </div>
</div>

<div class="form-check row"
    :class="{ 'has-danger': errors.has('enabled'), 'has-success': fields.enabled && fields.enabled.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="enabled" type="checkbox" v-model="form.enabled" v-validate="''"
            data-vv-name="enabled" name="enabled_fake_element">
        <label class="form-check-label" for="enabled">
            Is Enabled
        </label>
        <input type="hidden" name="enabled" :value="form.enabled">
        <div v-if="errors.has('enabled')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('enabled') }}</div>
    </div>
</div>

{{-- is paid --}}
<div class="form-check row"
    :class="{ 'has-danger': errors.has('ispaid'), 'has-success': fields.ispaid && fields.ispaid.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="ispaid" type="checkbox" v-model="form.ispaid" v-validate="''"
            data-vv-name="ispaid" name="ispaid">
        <label class="form-check-label" for="ispaid">
            Is Paid
        </label>
        <input type="hidden" name="ispaid" :value="form.ispaid">
        <div v-if="errors.has('ispaid')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('ispaid') }}</div>
    </div>
</div>

{{-- instant_result --}}
<div class="form-check row"
    :class="{ 'has-danger': errors.has('instant_result'), 'has-success': fields.instant_result && fields.instant_result.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="instant_result" type="checkbox" v-model="form.instant_result" v-validate="''"
            data-vv-name="instant_result" name="instant_result">
        <label class="form-check-label" for="instant_result">
            Display instant result
        </label>
        <input type="hidden" name="instant_result" :value="form.instant_result">
        <div v-if="errors.has('instant_result')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('instant_result') }}</div>
    </div>
</div>

{{-- indevidual result --}}
<div class="form-check row"
    :class="{ 'has-danger': errors.has('individual_result'), 'has-success': fields.individual_result && fields.individual_result.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="individual_result" type="checkbox" v-model="form.individual_result" v-validate="''"
            data-vv-name="individual_result" name="individual_result">
        <label class="form-check-label" for="individual_result">
            Display individual result
        </label>
        <input type="hidden" name="individual_result" :value="form.individual_result">
        <div v-if="errors.has('individual_result')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('individual_result') }}</div>
    </div>
</div>

{{-- overall result --}}
<div class="form-check row"
    :class="{ 'has-danger': errors.has('overall_result'), 'has-success': fields.overall_result && fields.overall_result.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="overall_result" type="checkbox" v-model="form.overall_result" v-validate="''"
            data-vv-name="overall_result" name="overall_result">
        <label class="form-check-label" for="overall_result">
            Display overall result
        </label>
        <input type="hidden" name="overall_result" :value="form.overall_result">
        <div v-if="errors.has('overall_result')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('overall_result') }}</div>
    </div>
</div>

{{-- province result --}}
<div class="form-check row"
    :class="{ 'has-danger': errors.has('province_result'), 'has-success': fields.province_result && fields.province_result.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="province_result" type="checkbox" v-model="form.province_result" v-validate="''"
            data-vv-name="province_result" name="province_result">
        <label class="form-check-label" for="province_result">
            Display province result
        </label>
        <input type="hidden" name="province_result" :value="form.province_result">
        <div v-if="errors.has('province_result')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('province_result') }}</div>
    </div>
</div>

{{-- zone result --}}
<div class="form-check row"
    :class="{ 'has-danger': errors.has('zone_result'), 'has-success': fields.zone_result && fields.zone_result.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="zone_result" type="checkbox" v-model="form.zone_result" v-validate="''"
            data-vv-name="zone_result" name="zone_result">
        <label class="form-check-label" for="zone_result">
            Display zone result
        </label>
        <input type="hidden" name="zone_result" :value="form.zone_result">
        <div v-if="errors.has('zone_result')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('zone_result') }}</div>
    </div>
</div>

{{-- district result --}}
<div class="form-check row"
    :class="{ 'has-danger': errors.has('district_result'), 'has-success': fields.district_result && fields.district_result.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="district_result" type="checkbox" v-model="form.district_result" v-validate="''"
            data-vv-name="district_result" name="district_result">
        <label class="form-check-label" for="district_result">
            Display district result
        </label>
        <input type="hidden" name="district_result" :value="form.district_result">
        <div v-if="errors.has('district_result')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('district_result') }}</div>
    </div>
</div>

{{-- is_finished --}}
<div class="form-check row"
    :class="{ 'has-danger': errors.has('is_finished'), 'has-success': fields.is_finished && fields.is_finished.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="is_finished" type="checkbox" v-model="form.is_finished" v-validate="''"
            data-vv-name="is_finished" name="is_finished">
        <label class="form-check-label" for="is_finished">
            Is finished
        </label>
        <input type="hidden" name="is_finished" :value="form.is_finished">
        <div v-if="errors.has('is_finished')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('is_finished') }}</div>
    </div>
</div>

{{-- is_hidden --}}
<div class="form-check row"
    :class="{ 'has-danger': errors.has('is_hidden'), 'has-success': fields.is_hidden && fields.is_hidden.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="is_hidden" type="checkbox" v-model="form.is_hidden" v-validate="''"
            data-vv-name="is_hidden" name="is_hidden">
        <label class="form-check-label" for="is_hidden">
            Is hidden
        </label>
        <input type="hidden" name="is_hidden" :value="form.is_hidden">
        <div v-if="errors.has('is_hidden')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('is_hidden') }}</div>
    </div>
</div>

{{-- test_duration in number of minutes --}}
<div class="form-group row align-items-center"
    :class="{ 'has-danger': errors.has('test_duration'), 'has-success': fields.test_duration && fields.test_duration.valid }">
    <label for="test_duration" class="col-form-label text-md-right"
        :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">Test duration in minutes</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="number" v-model="form.test_duration" v-validate="'required|decimal'" @input="validate($event)"
            class="form-control"
            :class="{ 'form-control-danger': errors.has('test_duration'), 'form-control-success': fields.test_duration && fields.test_duration.valid }"
            id="test_duration" name="test_duration" placeholder="e.g 45">
        <div v-if="errors.has('test_duration')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('test_duration') }}</div>
    </div>
</div>

<div class="form-group row align-items-center"
    :class="{ 'has-danger': errors.has('price'), 'has-success': fields.price && fields.price.valid }">
    <label for="price" class="col-form-label text-md-right"
        :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.test.columns.price') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.price" v-validate="'required|decimal'" @input="validate($event)"
            class="form-control"
            :class="{ 'form-control-danger': errors.has('price'), 'form-control-success': fields.price && fields.price.valid }"
            id="price" name="price" placeholder="{{ trans('admin.test.columns.price') }}">
        <div v-if="errors.has('price')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('price') }}</div>
    </div>
</div>

<div class="form-group row align-items-center"
    :class="{ 'has-danger': errors.has('date'), 'has-success': fields.date && fields.date.valid }">
    <label for="date" class="col-form-label text-md-right"
        :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.test.columns.date') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.date" :config="datetimePickerConfig" v-validate="'date_format:yyyy-MM-dd HH:mm:ss'"
                class="flatpickr"
                :class="{ 'form-control-danger': errors.has('date'), 'form-control-success': fields.date && fields.date.valid }"
                id="date" name="date" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}">
            </datetime>
        </div>
        <div v-if="errors.has('date')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('date') }}</div>
    </div>
</div>

<div class="form-group row align-items-center"
    :class="{ 'has-danger': errors.has('announce_date'), 'has-success': fields.announce_date && fields.announce_date.valid }">
    <label for="announce_date" class="col-form-label text-md-right"
        :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.test.columns.announce_date') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.announce_date" :config="datePickerConfig"
                v-validate="'date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr"
                :class="{ 'form-control-danger': errors.has('announce_date'), 'form-control-success': fields.announce_date &&
                        fields.announce_date.valid }"
                id="announce_date" name="announce_date"
                placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('announce_date')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('announce_date') }}
        </div>
    </div>
</div>

<div class="form-group row align-items-center"
    :class="{ 'has-danger': errors.has('last_date'), 'has-success': fields.last_date && fields.last_date.valid }">
    <label for="last_date" class="col-form-label text-md-right"
        :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.test.columns.last_date') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.last_date" :config="datePickerConfig"
                v-validate="'date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr"
                :class="{ 'form-control-danger': errors.has('last_date'), 'form-control-success': fields.last_date && fields
                        .last_date.valid }"
                id="last_date" name="last_date"
                placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('last_date')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('last_date') }}
        </div>
    </div>
</div>
