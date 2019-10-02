require('./bootstrap');

window.Vue = require('vue');
Vue.config.productionTip = false

// Vue.component('navbar-vue', require('./components/Navbar.vue').default);
// Vue.component('login-modal-vue', require('./components/LoginModal.vue').default);
// Vue.component('products-vue', require('./components/Products.vue').default);
Vue.component('app-vue', require('./components/App.vue').default);

const app = new Vue({
    el: '#app'
});
