<template>
    <section class="content">
        <div class="box box-primary">
            <div class="box-body table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Naziv</th>
                            <th>Parent Category ID</th>
                            <th>WS Sort</th>
                            <th>WS Nivo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-bind:key="category.id" v-for="(category, index) in items">
                            <td class="align-middle" v-text="category.id"></td>
                            <td class="align-middle">{{ category.title }}</td>
                            <td class="align-middle">
                                <span :key="child.id" v-for="child in category.child">
                                    {{ child.title }}
                                </span>
                            </td>
                            <td class="align-middle">{{ category.wssort }}</td>
                            <td class="align-middle">{{ category.wsnivo }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="box-footer">
                <button style="margin-bottom: 5px;"
                    class="btn btn-sm" 
                    :class="!visibleForm ? 'btn-primary' : 'btn-danger'" 
                    @click="visibleForm = !visibleForm" 
                    v-text="visibleForm ? 'Close' : 'Create'">
                </button>
                <category-create @added="fetch" :visibleForm="visibleForm">
                </category-create>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        data() {
            return {
                items: [],
                visibleForm: false,
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
        }
    }
</script>