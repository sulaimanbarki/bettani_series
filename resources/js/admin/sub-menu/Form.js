import AppForm from '../app-components/Form/AppForm';

Vue.component('sub-menu-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                title:  '' ,
                slug:  '' ,
                icon_url:  '' ,
                order:  '' ,
                is_active:  false ,
                menu_id:  '' ,
                
            }
        }
    }

});