<template>
    <div>
        <form @submit.prevent="submit_login">
        <div class="login-form">
            <h4 class="title">Prisijungimas</h4>
            <label class="form-label">El. paštas</label>
            <input type="text" v-model="fields.title">
                <div class="alert alert-danger" v-if="errors && errors.title">
                    {{ errors.title[0] }}
                </div>
            <label class="form-label">Slaptažodis</label>
            <input type="text" v-model="fields.author">
            <button>Prisijungti</button>
            <h5 class="dont-have">Neturite paskyros?<router-link to="/register" class="another-action">Registruokitės</router-link></h5>
        </div>
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                fields: {
                    email: '',
                    password: '',
                },
                errors: { },
                form_submitting: false
            }
        },
        mounted() {
           
        },
        methods: {
            submit_login() {
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