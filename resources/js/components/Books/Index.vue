<template>
<div>
    <div class="new-books-section">
        <div class="index-book-item" v-for="book in books">
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
</div>
</template>

<script>
    export default {
        data() {
            return {
                books: []
            }
        },
        mounted() {
            axios.get('http://samdomas.lt/books-shop/api/v1/books')
                .then(response => {
                    this.books = response.data.data;
            });
        }
    }

</script>