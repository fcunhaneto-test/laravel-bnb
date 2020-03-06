<template>
    <section class="row">
        <div class="col-md-12">
            <h6 class="text-uppercase text-secondary text-center font-weight-bolder">
                Check Availability<br>
                <span v-if="noAvailability" class="text-danger">NOT AVAILABLE</span>
                <span v-if="hasAvailability" class="text-success">AVAILABLE</span>
            </h6>
        </div>
        <div class="form-row col-md-6 justify-content-center">
            <div class="form-group ml-2">
                <label class="small text-uppercase" for="from">From</label>
                <input id="from" type="date" v-model="from" name="from" class="form-control form-control-sm" v-if
                       :class="[{'is-invalid': errorFor('from')}]">
                <div class="invalid-feedback" v-for="(error, i) in errorFor('from')" :key="i">
                    {{ error }}
                </div>
            </div>
        </div>
        <div class="form-row col-md-6 justify-content-center">
            <div class="form-group ml-2">
                <label class="small text-uppercase" for="to">To</label>
                <input id="to" type="date" v-model="to" name="to" class="form-control form-control-sm"
                       :class="[{'is-invalid': errorFor('to')}]">
                <div class="invalid-feedback" v-for="(error, i) in errorFor('to')" :key="i">
                    {{ error }}
                </div>
            </div>
        </div>
        <div class="col-md-12 text-center">
            <button class="btn btn-primary btn-block btn-sm" @click="check" :disabled="loading">CHECK</button>
        </div>
    </section>
</template>

<script>
    export default {
        name: "Availability",
        data() {
            return {
                from: null,
                to: null,
                loading: false,
                status: null,
                errors: null
            }
        },
        methods: {
            check() {
                this.loading = true;
                this.errors = null;
                axios.get(`/api/bookables/${this.$route.params.id}/availability?from=${this.from}&to=${this.to}`)
                    .then(response => {
                        this.status = response.status
                    })
                    .catch(error => {
                        if (error.response.status === 422) {
                            console.log(error.response.data)
                            this.errors = error.response.data.errors
                        }
                        this.status = error.response.status
                    })
                    .then(() => this.loading = false)
            },
            errorFor(field) {
                return this.hasError && this.errors[field] ? this.errors[field] : null
            }
        },
        computed: {
            hasError() {
                return 422 == this.status && this.errors != null
            },
            hasAvailability() {
                return 200 == this.status
            },
            noAvailability() {
                return 404 == this.status
            }
        }
    }
</script>

<style scoped>

</style>
