require('./bootstrap');

window.Vue = require('vue');
Vue.config.productionTip = false

// Vue.component('app-vue', require('./components/App.vue').default);

import VueRouter from 'vue-router'
Vue.use(VueRouter)


const routes = [
    { path: '/', component: require('./components/App.vue').default },
    { path: '/admin', component: require('./components/AdminApp.vue').default }
];


const router = new VueRouter({
    routes
});

const app = new Vue({
    el: '#app',
    router
});
