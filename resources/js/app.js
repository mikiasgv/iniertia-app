import { App, plugin } from "@inertiajs/inertia-vue";
import Vue from "vue";

Vue.mixin({ methods: { route: window.route } });
Vue.use(plugin);
//Vue.prototype.$route = route;

const el = document.getElementById("app");

new Vue({
    render: h =>
        h(App, {
            props: {
                initialPage: JSON.parse(el.dataset.page),
                resolveComponent: name =>
                    import(`./Pages/${name}`).then(module => module.default)
            }
        })
}).$mount(el);
