
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import Vue from 'vue';
import Vuetify from 'vuetify';
import App from './components/App.vue';
import router from './router';
import '../../../node_modules/vuetify/dist/vuetify.min.css';

Vue.use(Vuetify);

const app = new Vue({
    el: '#app',
    router,
    template: '<App/>',
    components: {App}
});
