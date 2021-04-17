/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vue2Filters from 'vue2-filters';

var Vue2FiltersConfig = {
    capitalize: {
        onlyFirstLetter: false
    },
    number: {
        format: '0.00',
        thousandsSeparator: '.',
        decimalSeparator: ','
    },
    bytes: {
        decimalDigits: 2
    },
    percent: {
        decimalDigits: 2,
        multiplier: 100
    },
    currency: {
        symbol: '',
        decimalDigits: 2,
        thousandsSeparator: '.',
        decimalSeparator: ',',
        symbolOnLeft: true,
        spaceBetweenAmountAndSymbol: false,
        showPlusSign: false
    },
    pluralize: {
        includeNumber: false
    },
    ordinal: {
        includeNumber: false
    }
}

Vue.use(Vue2Filters, Vue2FiltersConfig);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('base-alert', require('./components/ui/BaseAlert.vue').default); 
Vue.component('toggle-status', require('./components/ToggleStatus.vue').default);
Vue.component('bs-articles', require('./components/Articles.vue').default);
Vue.component('paginator', require('./components/Paginator.vue').default);
Vue.component('categories-list', require('./components/categories/CategoriesList.vue').default);
Vue.component('category-create', require('./components/categories/CategoryCreate.vue').default);
Vue.component('single-category', require('./components/categories/SingleCategory.vue').default);
Vue.component('base-button', require('./components/ui/BaseButton.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
