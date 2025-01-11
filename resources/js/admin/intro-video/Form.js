import AppForm from '../app-components/Form/AppForm';

Vue.component('intro-video-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                title:  '' ,
                url:  '' ,
                thumbnail:  '' ,
                order:  '' ,
                platform:  '' ,
                is_active:  false ,
                
            }
        }
    },
    props: [
        'menus',
    ]

});