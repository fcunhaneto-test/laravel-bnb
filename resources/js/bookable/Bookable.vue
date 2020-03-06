<template xmlns="http://www.w3.org/1999/html">
    <section class="container">
        <div class="row d-inline-flex" v-if="loading">
            <div class="col-md-12">
                <h2>Loading Data</h2>
            </div>
        </div>
        <div class="row align-content-lg-center" v-else>
            <div class="col-md-8  mt-2">
                <section class="card h-100 border-info" v-if="bookable">
                    <div class="card-header text-dark">
                        <h2 class="card-title font-weight-bold mt-0 mb-0">
                            {{ bookable.title }}
                        </h2>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ bookable.description}}</p>
                    </div>
                </section>
            </div>
            <div class="col-md-4 mt-2">
                <availability
                    :bookable-id="this.$route.params.id"
                />
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-8">
                <h5 class="">Review List</h5>
                <hr class="border-dark">
                <review-list
                    :bookable-id="this.$route.params.id"
                />
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
                bookable: null,
                reviews: null
            }
        },
        created() {
            this.loading = true;
            axios.get(`/api/bookables/${this.$route.params.id}`).then(response => this.bookable = response.data.data);
            axios.get(`/api/bookables/${this.$route.params.id}/reviews`).then(response => this.reviews = response.data.data);
            this.loading = false
        }
    }
</script>

<style scoped>

</style>
