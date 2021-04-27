<template>
    <div class="overflow-hidden">
        <div class="filters">
        <select>
            <option v-for="category in categories.data">{{ category.name }}</option>
        </select>
        <select>
            <option v-for="genre in genres.data">{{ genre.name }}</option>
        </select>
        <input placeholder="Paieška" v-model="search">
        </div>
    <div class="new-books-section">
        <div class="index-book-item" v-for="book in books.data">
            <div class="book-cover">
					<img src="/../../img/book.jpg">
			</div>
            <h1 class="book-title">{{ book.title }}</h1>
            <h1 class="book-author"><span>Aut.</span> {{ book.authors }}</h1>
            <div class="book-price">
                <h1 class="price-new">€{{ book.price }}</h1>
            </div>
            <button class="add-to-cart-round"></button>
        </div>
    </div>
    <div class="pagination-box">
    <pagination :data="books" @pagination-change-page="getResults"></pagination>
    </div>
</div>
</template>

<script>

    export default {
         data() {
            return {
                books: {},
                genres: {},
                categories: {},
                search: ''
            }
        },
        mounted() {
            this.getResults();
             axios.get('http://samdomas.lt/books-shop/api/v1/genres')
                    .then(response => {
                        this.genres = response.data;
                    });
            axios.get('http://samdomas.lt/books-shop/api/v1/categories')
                    .then(response => {
                        this.categories = response.data;
                    });
        },
        watch: {
            search(val) {
                this.getResults();
            }
        },
        methods: {
		// Our method to GET results from a Laravel endpoint
            getResults(page = 1) {
                axios.get('http://samdomas.lt/books-shop/api/v1/books', {
                    params: {
                        page,
                        search: this.search
                        }
                })
                    .then(response => {
                        this.books = response.data;
                    });
            }
	    }
    }

</script>