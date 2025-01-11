import AppForm from '../app-components/Form/AppForm';

Vue.component('drop-down-menu-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                title:  '' ,
                slug:  '' ,
                order:  '' ,
                parent_id:  '' ,
                is_active:  false ,
                
            }
        }
    },
    props: [
        'menus',
    ]

});