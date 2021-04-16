<template>
    <div class="row" v-if="visibleForm">
        <form @submit.prevent="addItem">
            <div class="col-xs-12">
                <div v-if="errors" class="alert alert-danger">
                    <ul v-for="(value, key) in errors" :key="key">
                        <li v-for="error in value" :key="error">
                            {{ error }}
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-lg-6">
                <div class="form-group col-md-12">
                    <label for="title">Title</label>
                    <input v-model="title" class="form-control" type="text" name="title" id="title" >
                </div>
            </div>
            <div class="col-xs-12 col-lg-6">
                <div class="form-group col-xs-4 col-lg-4">
                    <label for="bscat_id">Parent ID</label>
                    <input v-model="bscat_id" class="form-control" type="number" min="0" name="bscat_id" id="bscat_id" required>
                </div>
                <div class="form-group col-xs-4 col-lg-4">
                    <label for="wssort">WS Sort</label>
                    <input v-model="wssort" class="form-control" type="number" min="1" name="wssort" id="wssort" required>
                </div>
                <div class="form-group col-xs-4 col-lg-4">
                    <label for="wsnivo">WS Nivo</label>
                    <input v-model="wsnivo" class="form-control" type="number" min="1" name="wsnivo" id="wsnivo" required>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="col-sm-3">
                    <button type="submit" class="btn btn-primary btn-sm">Create</button>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        props: {
            'visibleForm': Boolean
        },

        data() {
            return {
                title: '',
                bscat_id: 0,
                wssort: 1,
                wsnivo: 1,
                errors: null,
            }
        },

        methods: {
            addItem() {
                let category = {
                    title: this.title,
                    bscat_id: this.bscat_id,
                    wssort: this.wssort,
                    wsnivo: this.wsnivo,
                }

                axios.post('/tp-admin/categories', category).then((response) => {
                    this.resetData();
                    this.$emit('added');
                    flash(response.data.message);
                }).catch(error => {
                    if (error.response.status === 422) {
                        this.errors = error.response.data.errors;
                    }
                });
            },

            resetData() {
                this.errors = null;
                this.title = '';
                this.bscat_id = 0;
                this.wssort = 1;
                this.wsnivo = 1;
            }
        }
    }
</script>