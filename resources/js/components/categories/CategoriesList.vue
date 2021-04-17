<template>
    <section class="content">
        <div class="box box-primary">
            <base-alert></base-alert>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Naziv</th>
                            <th>Parent Category ID</th>
                            <th>WS Sort</th>
                            <th>WS Nivo</th>
                            <th>Akcija</th>
                        </tr>
                    </thead>
                    <tbody>
                        <single-category 
                            v-bind:key="category.id"
                            v-for="(category, index) in items"
                            :category="category"
                            @remove="destroy"
                            >
                        </single-category>
                    </tbody>
                </table>
            </div>
            <div class="box-footer">
                <div v-if="message">
                    <div class="alert alert-success">
                        {{ message }}
                    </div>
                </div>
                <base-button style="margin-bottom: 5px;"
                    @clicked="visibleForm = !visibleForm"
                    :class="'btn-'+btnType"
                    v-text="caption">
                </base-button>
                <category-create @added="fetch" :visibleForm="visibleForm">
                </category-create>
            </div>
        </div>
    </section>
</template>

<script>
    import BaseButton from '../ui/BaseButton.vue';
    import CategoryCreate from '../categories/CategoryCreate.vue';
    import SingleCategory from '../categories/SingleCategory.vue';

    export default {
        components: { 
            BaseButton,
            CategoryCreate,
            SingleCategory
        },

        data() {
            return {
                items: [],
                visibleForm: false,
                btnType: 'primary',
                caption: 'Create',
                message: null
            }
        },

        created() {
            this.fetch();
        },

        methods: {
            fetch() {
                axios.get('/tp-admin/categories?v=1').then(response => {
                    this.items = response.data;
                });
            },

            destroy(id) {
                axios.delete("/tp-admin/categories/" + id).then((response) => {
                    this.fetch();
                    flash(response.data.message);
                });
            }
        },

        watch: {
            visibleForm(value) {
                if (value) {
                    this.btnType = 'danger';
                    this.caption = 'Close';
                } else {
                    this.btnType = 'primary';
                    this.caption = 'Create';
                }
            }
        }
    }
</script>