<template>
    <div class="dashboard">
        
        <div class="side-menu">
            <ul>
                <li><a>Pagrindinis</a></li>
                <li><a>Pardavimai</a></li>
                <li><a>Aktyvios knygos</a></li>
                <li><a>Nepatvirtintos knygos</a></li>
            </ul>
        </div>
        <div class="dashboard-main-section">
            <h3 v-if="user">Priviet {{ user.user.name }}</h3>
            <div class="statistic-box">
                <div class="fact">
                    <h5>Šis mėnuo</h5>
                    <p>215.00</p>
                </div>
                <div class="fact">
                    <h5>Įkelta knygų</h5>
                    <p>{{ user.booksNr }}</p>
                </div>
            </div>
            <div class="notifications">
                <ul>
                    <li>J8s7 knyga patvirtinta</li>
                    <li>J8s7 knyga patvirtinta</li>
                    <li>J8s7 knyga patvirtinta</li>
                    <li>J8s7 knyga patvirtinta</li>
                </ul>
            </div>
            <div class="active-my-books">

            </div>
        </div>
        
    </div>
</template>

<script>
    export default {
        data() {
            return {
            user: null
            }
        },
        async created() {
            const response = await axios.get('http://samdomas.lt/books-shop/api/v1/user', {
                headers: {
                Authorization: 'Bearer ' + localStorage.getItem('token')
                }
            });
            this.user = response.data;
        }
    }
</script>