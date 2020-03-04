<template xmlns="http://www.w3.org/1999/html">
    <section class="container">
        <div class="row d-inline-flex" v-if="loading">
            <div class="col-12">
                <h2>Loading Data</h2>
            </div>
        </div>
        <div class="row align-content-lg-center" v-else>
            <article class="col-8">
                <div class="card h-100">
                    <div class="card-header text-dark">
                        <h5 class="card-title mt-0 mb-0">
                            {{ bookable.title}}
                        </h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ bookable.description}}</p>
                    </div>
                </div>
            </article>
            <div class="col-4">
                <availability></availability>
            </div>
        </div>
    </section>
</template>

<script>
    import Availability from "./Availability";
    export default {
        name: "Bookable",
        components: {
            Availability
        },
        data() {
            return {
                loading: true,
                bookable: null
            }
        },
        created() {
            this.loading = true;
            axios.get(`/api/bookables/${this.$route.params.id}`).then(resp => this.bookable = resp.data.data);
            this.loading = false
        }
    }
</script>

<style scoped>

</style>
