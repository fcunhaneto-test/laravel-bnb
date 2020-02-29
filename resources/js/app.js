require('./bootstrap');

window.Vue = require('vue');

import VueRouter from "vue-router";
import router from "./routes";

import Index from "./components/Index";
Vue.use(VueRouter);

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('example-2', require('./components/Example2.vue').default);

const app = new Vue({
    router,
    el: '#app',
    components: {
        'index': Index
    }
});
