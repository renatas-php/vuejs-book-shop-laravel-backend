<template>
<div>
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
                books: {}
            }
        },
        mounted() {
            this.getResults();
        },
        methods: {
		// Our method to GET results from a Laravel endpoint
            getResults(page = 1) {
                axios.get('http://samdomas.lt/books-shop/api/v1/books?page=' + page)
                    .then(response => {
                        this.books = response.data;
                    });
            }
	    }
    }

</script>