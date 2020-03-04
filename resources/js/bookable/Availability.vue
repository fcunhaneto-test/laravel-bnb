<template>
    <section class="row">
        <div class="col-12">
            <h6 class="text-uppercase text-secondary text-center font-weight-bolder">Check Availability</h6>
        </div>
        <div class="form-row col-6 justify-content-center">
            <div class="form-group ml-2">
                <label class="small text-uppercase" for="from">From</label>
                <input id="from" type="date" v-model="from" name="from" class="form-control form-control-sm">
            </div>
        </div>
        <div class="form-row col-6 justify-content-center">
            <div class="form-group ml-2">
                <label class="small text-uppercase" for="to">To</label>
                <input id="to" type="date" v-model="to" name="to" class="form-control form-control-sm">
            </div>
        </div>
        <div class="col-12 text-center">
            <button class="btn btn-primary btn-block btn-sm text-uppercase" @click="check">Check</button>
        </div>
    </section>
</template>

<script>
    export default {
        name: "Availability",
        data() {
            return {
                from: null,
                to: null
            }
        },
        methods: {
            check() {
                alert(`Check Dates from ${this.from} to ${this.to}`)
            }

        }
    }
</script>

<style scoped>

</style>
