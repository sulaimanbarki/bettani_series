import AppForm from '../app-components/Form/AppForm';

Vue.component('zone-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                province_id:  '' ,
            }
        }
    },
    props: [
        'provinces',
        'data'
    ],

    // if zone is created then console.log the response
    created() {
        if (this.data) {
            this.form.province_id = this.data.province_id;
            console.log( this.form.province_id );
        }
    }

});