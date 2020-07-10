<template>
    <form class="form-row" method="POST">
        <div class="col-lg-12  mb-4" v-if="created">
            <div class="feature-info feature-info-02 p-2 p-lg-2 bg-dark">
                <div class="feature-info-content w-100 justify-content-between d-flex text-white pl-sm-4 pl-0">
                    <h5 class="text-white pt-2">{{ link }}</h5>
                    <button class="btn btn-sm btn-primary" type="button" v-clipboard:copy="link" v-clipboard:success="onCopy">
                        <i class="fas fa-copy" v-if="!copied"></i>
                        <i class="fas fa-clipboard-check" v-else></i>
                    </button>
                </div>
            </div>
        </div>
        <input type="hidden" name="_token" :value="csrf">
        <div class="form-group col-md-12">
            <label>Message</label>
            <textarea class="form-control" rows="4" v-model="text" name="text" required
                      placeholder="Secret message..."></textarea>
        </div>
        <div class="form-group col-md-12">
            <label>Passphrase</label>
            <input type="text" class="form-control" v-model="passphrase" name="passphrase" placeholder="Passphrase"
                   required>
        </div>

        <div class="form-group col-md-5 select-border">
            <label>Auto-destroy after:</label>
            <select class="form-control basic-select" name="time_destroy" v-model="time_destroy">
                <option value="60" selected>1 minute</option>
                <option value="300">5 minutes</option>
                <option value="1800">30 minutes</option>
                <option value="3600">1 hour</option>
                <option value="21000">6 hours</option>
                <option value="43200">12 hours</option>
                <option value="86400">1 day</option>
                <option value="604800">7 days</option>
            </select>
        </div>
        <div class="col-md-2 p-5 text-center">
            <b>OR</b>
        </div>

        <div class="form-group col-md-5 select-border">
            <div class="form-group col-md-12">
                <label>After <b>N</b> views:</label>
                <input type="number" name="views_destroy" v-model="views_destroy" class="form-control"
                       placeholder="Count"  required>
            </div>
        </div>
        <div class="col-md-12">
            <button class="btn btn-primary" type="button" @click="create()">Create note</button>
        </div>
    </form>
</template>

<script>
    export default {
        name: "CreateNote",
        props: [
          'csrf'
        ],
        data () {
            return {
                text: null,
                passphrase: null,
                time_destroy: 60,
                views_destroy: 1,
                link: null,
                copied: false,
                created: false
            }
        },
        methods: {
            create () {
                axios.post('/create',{
                    _token: this.csrf, text: this.text, passphrase: this.passphrase, time_destroy: this.time_destroy, views_destroy: this.views_destroy
                }).then(response => {
                    this.link = response.data.link;
                    this.created = true;
                }).catch(error => {
                    console.log(error)
                });
            },
            onCopy () {
                this.copied = true;
            }
        }
    }
</script>

<style scoped>

</style>
