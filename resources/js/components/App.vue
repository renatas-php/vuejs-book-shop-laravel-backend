
<template>
    <div>
        <div class="top-nav">
            <ul>
                <li><router-link to="/">Pradinis</router-link></li>
                <li><a href="" id="categories">Kategorijos <i class="fas fa-chevron-down"></i></a>
                    <ul class="dropdown">
                        <li v-for="category in categories.data"><a href="">{{ category.name }}</a></li>
                    </ul>
                </li>
                <li><router-link to="/books-popular">Populiariausios</router-link></li>
                <li><router-link to="/book-offer">Pasiūlyti knygą</router-link></li>
                <li><router-link to="/login" class="login-reg">Prisijungti</router-link></li>
                <li><router-link to="/logout" class="login-reg">ats</router-link></li>
            </ul>
        </div>
        <router-view></router-view>
    </div>
</template>

<script>

    export default {
         data() {
            return {
                categories: {}
            }
        },
        mounted() {
             axios.get('http://samdomas.lt/books-shop/api/v1/categories')
                    .then(response => {
                        this.categories = response.data;
                    });
        }
    }

</script>