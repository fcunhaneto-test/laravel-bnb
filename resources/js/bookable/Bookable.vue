<template xmlns="http://www.w3.org/1999/html">
    <section class="container">
        <div class="row d-inline-flex" v-if="loading">
            <div class="col-md-12">
                <h2>Loading Data</h2>
            </div>
        </div>
        <div class="row align-content-lg-center" v-else>
            <div class="col-md-8  mt-2">
                <section class="card h-100 border-info">
                    <div class="card-header text-dark">
                        <h2 class="card-title font-weight-bold mt-0 mb-0">
                            {{ bookable.title}}
                        </h2>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ bookable.description}}</p>
                    </div>
                </section>
            </div>
            <div class="col-md-4 mt-2">
                <availability></availability>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-8">
                <h5 class="">Review List</h5>
                <hr class="border-dark">
                <div class="row mt-3 pb-3 border-bottom"  v-for="i in 3" :key="i">
                    <div class="col-6">
                        Francisco Cunha
                    </div>
                    <div class="col-6">
                        STAR RATING
                    </div>
                    <div class="col-md-12">
                        Add 5 minutes ago
                    </div>
                    <div class="col-md-12 pt-3">
                        Content of review
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    import Availability from "./Availability";
    import ReviewList from "./ReviewList";

    export default {
        name: "Bookable",
        components: {
            Availability,
            ReviewList
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
