<template>
    <button
        @click="$emit('clicked')"
        class="btn btn-md"
        >
        <slot></slot>
    </button>
</template>

<script>
    export default {}
</script>