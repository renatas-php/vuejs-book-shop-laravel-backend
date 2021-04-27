import BooksIndex from '../components/Books/Index.vue'
import BookOffer from '../components/Books/BookOffer.vue'
import Popular from '../components/Books/Popular.vue'

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
    ]
}

