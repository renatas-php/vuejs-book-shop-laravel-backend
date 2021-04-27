<template>
    <div>
        <form @submit.prevent="submit_form">
        <div class="offer-book-form">
            <label class="form-label">Pavadinimas</label>
            <input type="text" v-model="fields.title">
                <div class="alert alert-danger" v-if="errors && errors.title">
                    {{ errors.title[0] }}
                </div>
            <label class="form-label">Autorius</label>
            <input type="text" v-model="fields.author">
            <label class="form-label">Kategorija</label>
            <select v-model="fields.category_id">
                <option v-for="category in categories.data" :value="category.id">{{ category.name }}</option>
            </select>
            <label class="form-label">Žanras</label>
            <select v-model="fields.genre_id">
                <option v-for="genre in genres.data" :value="genre.id">{{ genre.name }}</option>
            </select>
            <label class="form-label">Kaina</label>
            <input type="number" v-model="fields.price">
            <label class="form-label">Aprašymas</label>
            <textarea v-model="fields.description"></textarea>
            <button>Pateikti</button>
        </div>
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                categories: {},
                genres: {},
                fields: {
                    user_id: 2,
                    slug: 'hdhhdhdh',
                    cover_img: 'kjkjkj',
                    approved: false,
                    title: '',
                    author: '',
                    category_id: '',
                    genre_id: '',
                    price: '',
                    description: ''
                },
                errors: { },
                form_submitting: false
            }
        },
        mounted() {
            axios.get('http://samdomas.lt/books-shop/api/v1/categories')
                    .then(response => {
                        this.categories = response.data;
                    });
            axios.get('http://samdomas.lt/books-shop/api/v1/genres')
                    .then(response => {
                        this.genres = response.data;
                    });
        },
        methods: {
            submit_form() {
                axios.post('http://samdomas.lt/books-shop/api/v1/books/add', this.fields)
                    .then(response => {
                    this.$router.push('/');
                    this.form_submitting = false;
                    }).catch(error => {
                        if(error.response.status === 422) {
                            this.errors = error.response.data.errors;
                            this.form_submitting = false;
                        }
                    });
            }
        }
    }
</script>