<template>
    <div class="card h-100">
        <div class="card-header text-dark">
            <h5 class="card-title mt-0 mb-0">
                <router-link :to="{name: 'bookable', params: { id: bookable.id }}">
                        {{ bookable.title }}
                </router-link>
            </h5>
        </div>
        <div class="card-body">
            <p class="card-text">{{ bookable.description}}</p>
        </div>
    </div>
</template>

<script>
    export default {
        name: "BookablesListItem",
        props: {
            bookable: {
                type: Object,
                required: true
            }
        }
    }
</script>

<style scoped>

</style>
