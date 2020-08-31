<template>
    <div class="align-middle text-center">
        <a @click="markRead" class="btn btn-xs"
            :class="read ? 'btn-primary disabled' : 'btn-danger'">
            <span v-text="read ? 'Read' : 'Unread'"></span>
        </a>
    </div>
</template>

<script>

    export default {
        props: ['data'],
        
        data() {
            return {
                read: this.data.read_at
            }
        },

        methods: {
            markRead() {
                this.read = !this.read;
                axios.post("/tp-admin/profiles/"+this.data.notifiable_id+"/notifications/" + this.data.id, {
                    _method: 'delete'
                } );
            } 
        }
    }
</script>