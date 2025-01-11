import AppForm from "../app-components/Form/AppForm";

Vue.component("district-form", {
    mixins: [AppForm],
    data: function () {
        return {
            form: {
                district_name: "",
                disable_enable_status: "",
                province:  '' ,
            },
        };
    },
    props: ["provinces"],
});
