<template>
    <ul class="alert bg-danger text-white list-group p-2 w-100 mb-2">
        <li class="p-1" v-for="error in localErrors">{{ error }}</li>
    </ul>
</template>

<script>
    export default {
        props:[
            'errors'
        ],
        data () {
            return {
                localErrors: this.errors
            }
        },
        methods: {
            validationErrors(){
                let errors = Object.values(this.localErrors);
                errors = errors.flat();
                this.localErrors = errors.flat();
            }
        },
        created () {
            this.validationErrors()
        }
    }
</script>
