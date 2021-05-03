<template>
    <div>
        <form action="#" @submit.prevent="handleLogin">
        <div class="login-form">
            <h4 class="title">Prisijungimas</h4>
            <label class="form-label">El. paštas</label>
            <input type="text" v-model="email">
                
            <label class="form-label">Slaptažodis</label>
            <input type="text" v-model="password">
            <button type="submit">Prisijungti</button>
            <h5 class="dont-have">Neturite paskyros?<router-link to="/register" class="another-action">Registruokitės</router-link></h5>
        </div>
        </form>
    </div>
</template>

<script>
    import axios from 'axios'
    export default {
        name: 'Login',
        data() {
            return {
                email: '',
                password: ''
            }
        },
        methods: {
            async handleLogin() {
                const response = await axios.post('http://samdomas.lt/books-shop/api/v1/login', {
                    email: this.email,
                    password: this.password
                });
                localStorage.setItem('token', response.data.token)
            }
        }
    }
</script>
