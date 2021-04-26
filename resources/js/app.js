require('./bootstrap');
window.Vue = require('vue').default;

import Vue from 'vue'

Vue.component('books-index', require('./components/Books/Index.vue').default)
Vue.component('pagination', require('laravel-vue-pagination'));

const app = new Vue({
    el: '#app'
});
