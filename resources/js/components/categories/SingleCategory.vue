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
            <base-button
                @clicked="remove(category.id)"
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

        methods: {
            remove(id) {
                this.$emit('remove', id);
            }
        },
    }
</script>