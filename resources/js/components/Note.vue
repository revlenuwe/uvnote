<template>
    <div class="row">
        <div class="col-lg-12">
            <form-errors v-if="errors" :errors="errors"></form-errors>
        </div>

        <div class="col-lg-12 col-sm-10 text-center align-self-center">
            <b class="bg-slider-sub-title">Write the Passphrase to unlock note</b>
            <div class="search mt-4">
                <a class="btn" href="javascript:void(0)" @click="checkPassphrase()">Unlock </a>
                <input type="text" class="form-control bold-border" v-model="inputPassphrase" placeholder="Passphrase">
            </div>
        </div>
        

        <div class="col-md-12" v-if="unlocked">
            <div class="card mt-3">
                <div class="card-body">
                    <blockquote class="blockquote quote-orange">
                        {{ text }}
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Note",
        props: [
            'csrf','passphrase','sign'
        ],
        data () {
            return {
                inputPassphrase: null,
                unlocked: false,
                text: null,
                errors: null
            }
        },
        methods: {
            checkPassphrase () {
                this.errors = null;
                axios.post('/passphrase/' + this.sign,{
                    _token: this.csrf, passphrase: this.inputPassphrase
                }).then(response => {
                    if(response.data.identical === true){
                        this.unlocked = true;
                        this.text = response.data.text;
                    }
                }).catch(error => {
                    if (error.response.status === 422) {
                        console.log(error.response.data);
                        this.errors = error.response.data;
                    }
                })
            }
        }
    }
</script>

<style scoped>

</style>
