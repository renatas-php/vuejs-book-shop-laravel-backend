import BooksIndex from '../components/Books/Index.vue'
import BookOffer from '../components/Books/BookOffer.vue'
import Popular from '../components/Books/Popular.vue'
import Login from '../components/Auth/Login.vue'
import Register from '../components/Auth/Register.vue'
import Dashboard from '../components/User/Dashboard.vue'

export default {
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
        {
            path: '/books-popular',
            component: Popular
        },
        {
            path: '/login',
            component: Login
        },
        {
            path: '/register',
            component: Register
        },
        {
            path: '/logout'
        },
        {
            path: '/dashboard',
            component: Dashboard
        }
    ]
}

