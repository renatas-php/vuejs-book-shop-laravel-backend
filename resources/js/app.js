require('./bootstrap');
window.Vue = require('vue').default;

import Vue from 'vue'

Vue.component('books-index', require('./components/Books/Index.vue').default)

const app = new Vue({
    el: '#app'
});
