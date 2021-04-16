<template>
    <div class="alert alert-flash"
        :class="'alert-'+type"
        v-show="show"
        v-text="body">
    </div>
</template>

<script>
    export default {
        props: {
            message: String,
        },

        data() {
            return {
                body: this.message,
                type: 'success',
                show: false,
            }
        },

        created() {
            if (this.message) {
                this.flash();
            }

            window.events.$on('flash', data => this.flash(data));
        },

        methods: {
            flash(data) {
                if (data) {
                    this.body = data.message;
                    this.type = data.type;
                }

                this.show = true;

                this.hide();
            },

            hide() {
                setTimeout(() => {
                    this.show = false;
                }, 4000);
            },
        },
    }
</script>

<style scoped>
    .alert-flash {
        position: fixed;
        right: 25px;
        bottom: 25px;
        z-index: 100;
    }
</style>