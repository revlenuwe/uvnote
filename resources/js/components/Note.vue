<template>
    <div class="col-lg-12 col-sm-10 text-center align-self-center">
        <b class="bg-slider-sub-title">Write the Passphrase to unlock note</b>
        <div class="search mt-4">
            <a class="btn" href="#">Unlock </a>
            <input type="text" class="form-control bold-border" placeholder="Passphrase">
        </div>
    </div>
    <div class="col-md-12">
        <div class="job-shortby ml-sm-auto d-flex align-items-center float-right">
            <div class="filter-btn ml-sm-3 ml-auto">
                <div class="btn-group btn-group-sm" role="group">
                    <button class="btn btn-outline-primary "> Raw</button>
                    <button class="btn btn-outline-primary "> Area</button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card mt-3">
            <div class="card-body">
                <blockquote class="blockquote quote-orange">
                    TEsTEst
                </blockquote>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Note",
        props: [
            'csrf'
        ],
        methods: {
            checkPassphrase
        }
    }
</script>

<style scoped>

</style>
