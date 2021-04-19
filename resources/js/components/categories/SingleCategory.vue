<template>
    <tr>
        <td class="align-middle" v-text="category.id"></td>
        <td class="align-middle">{{ category.title }}</td>
        <td class="align-middle">
            <span :key="child.id" v-for="child in category.child">
                {{ child.title }}
            </span>
        </td>
        <td class="align-middle">{{ category.wssort }}</td>
        <td class="align-middle">{{ category.wsnivo }}</td>
        <td class="align-middle">
            <span v-show="confirmDelete">
                <base-button
                    @clicked="remove(category.id)"
                    :class="'btn-success btn-xs'"
                ><i class="fa fa-check"></i></base-button>
                <base-button
                    @clicked="cancel"
                    :class="'btn-warning btn-xs'"
                ><i class="fa fa-times"></i></base-button>
            </span>

            <base-button
                v-show="!confirmDelete"
                @clicked="confirm"
                :class="'btn-danger btn-xs'"
            >Delete</base-button>

        </td>
    </tr>
</template>

<script>
    export default {
        props: {
            'category': Object,
        },

        data() {
            return {
                confirmDelete: false,
                timeOut: null,
            }
        },

        methods: {
            remove(id) {
                this.$emit('remove', id);
            },

            confirm() {
                this.confirmDelete = !this.confirmDelete;
                this.hide();
            },

            cancel() {
                clearTimeout(this.timeOut);
                this.confirmDelete = !this.confirmDelete;
            },

            hide() {
                this.timeOut = setTimeout( () => {
                    this.confirmDelete = !this.confirmDelete
                }, 3000);
            }
        },
    }
</script>