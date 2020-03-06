<template>
    <div>
        <div class="row mt-3 pb-3 border-bottom"  v-for="(review, index, i) in reviews" :key="i">
            <div class="col-6">
                Francisco Cunha
            </div>
            <div class="col-6">
                <star-rating
                    :rating="review.rating"
                />
            </div>
            <div class="col-md-12">
                {{ review.created_at | dateToNow }}
            </div>
            <div class="col-md-12 pt-3">
                {{ review.content }}
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ReviewList",
        props: ['bookable-id'],
        data() {
            return {
                loading: true,
                reviews: null
            }
        },
        created() {
            this.loading = true;
            axios.get(`/api/bookables/${this.bookableId}/reviews`).then(response => this.reviews = response.data.data);
            this.loading = false
        }
    }

</script>

<style scoped>

</style>
