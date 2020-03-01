<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom shadow p-3 mb-5">
        <router-link tag="a" class="navbar-brand" :to="{ name: 'home'}">Laravel BNB</router-link>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
<!--                <li class="nav-item">-->
<!--                    <router-link tag="a" class="nav-link" active-class="active" :to="{ name: 'second' }" exact>Second-->
<!--                    </router-link>-->
<!--                </li>-->
            </ul>
        </div>
    </nav>
</template>

<script>
    export default {
        name: "Navbar"
    }
</script>

<style scoped>
    .navbar-brand {
        margin-left: 2rem;
    }
</style>
