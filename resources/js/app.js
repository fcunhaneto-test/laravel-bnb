require('./bootstrap');

window.Vue = require('vue');

import moment from 'moment';
import VueRouter from "vue-router";
import router from "./routes";
import Index from "./components/Index";
import StarRating from "./shared/components/StarRating";

Vue.use(VueRouter);

Vue.filter('dateToNow', value => {
    // const date = d.substr(0, 10);
    // const dateParts = date.split('-');
    // return `${dateParts[2]}/${dateParts[1]}/${dateParts[0]}`;
    return moment(value).fromNow()
});

Vue.component('star-rating', StarRating)

const app = new Vue({
    router,
    el: '#app',
    components: {
        'index': Index
    }
});
