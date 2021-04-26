require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import App from './components/App.vue'
import BooksIndex from './components/Books/Index.vue'
import BookOffer from './components/Books/BookOffer.vue'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            component: BooksIndex
        },
        {
            path: '/book-offer',
            component: BookOffer
        },
    ]
})

Vue.component('pagination', require('laravel-vue-pagination'));

const app = new Vue({
    el: '#app',
    components: { App },
    router
});
