<template>
    <nav aria-label="..." class="mt-3" v-if="shouldPaginate">
    <ul class="pagination">
        <li class="page-item" :class="{ 'disabled': ! prevUrl}">
            <a class="page-link" href="#" tabindex="-1" @click.prevent="page>1 ? page = page-1 : ''">Previous</a>
        </li>

        <!-- <li class="page-item"
            :class="{ 'active': start == number }" v-for="number in last" v-if="(number < 5)" :key="number">
            <a class="page-link"
               :href="path+number" @click.prevent="start = number">{{ number }}</a>
        </li> -->

        <li class="page-item"
            :class="{ 'active': page == number }" v-for="number in last" v-if="((number < page+4) && (number > page-4))" :key="number">
            <a class="page-link"
               :href="path+number" @click.prevent="page = number">{{ number }} {{ (page == number) ? ' / ' + last : ''}}</a>
        </li>

        <li class="page-item" :class="{ 'disabled': ! nextUrl}">
            <a class="page-link" href="#" @click.prevent="page = page+1">Next</a>
        </li>
    </ul>
    </nav>
</template>

<script>

    export default {

        props: ['dataSet'],

        data() {
            return {
                page: 1,
                prevUrl: false,
                nextUrl: false,
                last: 0,
                path: '',
                offset: 0,
                strana: ''

            }
        },

        watch: {
            dataSet() {
                this.page = this.dataSet.current_page;
                this.prevUrl = this.dataSet.prev_page_url;
                this.nextUrl = this.dataSet.next_page_url;
                this.last = this.dataSet.last_page;
                this.path = this.dataSet.path+'?page=';
            },

            page() {
                this.broadcast().updatePage();
            }
        },

        methods: {
            broadcast() {
                this.$emit('changed', this.page);

                return this;
            },

            updatePage() {
                history.pushState(null, null, '?page=' + this.page);
            },

        },

        computed: {
            shouldPaginate() {
                return !! this.prevUrl || !! this.nextUrl;    
            }
        }
    }

</script>
