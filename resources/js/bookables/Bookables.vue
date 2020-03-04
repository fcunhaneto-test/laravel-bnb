<template>
    <section class="container">
        <div class="row d-inline-flex" v-if="loading">
            <div class="col-12">
                <h2>Loading Data</h2>
            </div>
        </div>
        <div class="row d-inline-flex" v-else>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3" v-for="(bookable, id) in bookables" :ket="id">
                <bookables-list-item
                    :bookable="bookable"
                ></bookables-list-item>
            </div>
        </div>
    </section>
</template>

<script>
    import BookablesListItem from "./BookablesListItem";

    export default {
        name: "Bookables",
        components: {
            BookablesListItem
        },
        data() {
            return {
                loading: true,
                bookables: []
            }
        },
        created() {
            this.loading = true;
            axios.get('api/bookables').then(resp => {
                this.bookables = resp.data.data
            });
            this.loading = false;
        }
    }
</script>

<style scoped>

</style>
