require('./bootstrap');

window.Vue = require('vue');

import VueRouter from "vue-router";
import router from "./routes";

import Index from "./components/Index";
Vue.use(VueRouter);

const app = new Vue({
    router,
    el: '#app',
    components: {
        'index': Index
    }
});
