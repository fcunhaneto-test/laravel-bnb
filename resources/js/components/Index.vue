<template>
    <div id="index">
        <navbar></navbar>
        <router-view></router-view>
    </div>
</template>

<script>
    import Navbar from "./Navbar";
    export default {
        name: "Index",
        components: {
            Navbar
        }
    }
</script>

<style scoped>

</style>
