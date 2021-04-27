
<template>
    <div>
        <div class="top-nav">
            <ul>
                <li><router-link to="/">Pradinis</router-link></li>
                <li><a href="" id="categories">Kategorijos <i class="fas fa-chevron-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="">Nekazas</a></li>
                        <li><a href="">Kzazas</a></li>
                    </ul>
                </li>
                <li><router-link to="/books-popular">Populiariausios</router-link></li>
                <li><router-link to="/book-offer">Pasiūlyti knygą</router-link></li>
                <li><a href="" class="login-reg">Prisijungti</a></li>
            </ul>
        </div>
        <router-view></router-view>
    </div>
</template>