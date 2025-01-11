import AppForm from '../app-components/Form/AppForm';

Vue.component('test-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                title:  '' ,
                slug:  '' ,
                description:  '' ,
                language:  '' ,
                enabled:  false ,
                price:  '' ,
                date:  '' ,
                announce_date:  '' ,
                last_date:  '' ,
                
            }
        }
    },
    props: ['data'],
    mounted() {

        if (this.data) {
            this.form.date = window.moment(this.data.date).subtract(5, 'hours').format('YYYY-MM-DD HH:mm:ss');
            this.form.announce_date = window.moment(this.data.announce_date).format('YYYY-MM-DD');
            this.form.last_date = window.moment(this.data.last_date).format('YYYY-MM-DD');
        }
    }

});