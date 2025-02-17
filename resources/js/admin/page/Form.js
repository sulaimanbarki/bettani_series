import AppForm from '../app-components/Form/AppForm';

Vue.component('page-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                meta_description:  '' ,
                meta_keywords:  '' ,
                page_name:  '' ,
                page_title:  '' ,
                
            }
        }
    }

});