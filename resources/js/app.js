require('./bootstrap');

window.Vue = require('vue');
Vue.config.productionTip = false

Vue.component('navbar-vue', require('./components/Navbar.vue').default);


const app = new Vue({
    el: '#app'
});
