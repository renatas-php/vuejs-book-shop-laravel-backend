import BooksIndex from '../components/Books/Index.vue'
import BookOffer from '../components/Books/BookOffer.vue'

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
    ]
}

