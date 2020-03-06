<template>
    <div class="d-flex-box">
        <i class="fas fa-star" v-for="index in stars" ></i>
        <i class="far fa-star" v-for="index2 in 5 - stars" ></i>
    </div>
</template>

<script>
    export default {
        name: "StarRating",
        props: {
            rating: String
        },
        data() {
            return {
                halfStar: false,
                my: 0
            }
        },
        computed: {
            stars() {
                return parseInt(this.rating)
            }
        },
        methods: {
            noStars() {
                if(this.halfStar) {
                    return 4 - this.hasStars
                }
                return 5 - this.hasStars
            }
        }
    }
</script>

<style scoped>

</style>
