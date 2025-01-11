import AppListing from '../app-components/Listing/AppListing';

Vue.component('district-listing', {
    mixins: [AppListing],
    data() {
        return {
            showProvinceFilter: false,
            provinceMultiselect: {},
    
            filters: {
                provinces: [],
            },
        }
    },
    
    watch: {
        showProvinceFilter: function (newVal, oldVal) {
            this.provinceMultiselect = [];
        },
        provinceMultiselect: function(newVal, oldVal) {
            this.filters.provinces = newVal.map(function(object) { return object['key']; });
            this.filter('provinces', this.filters.provinces);
        }
    }
});