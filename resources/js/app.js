/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('example-component', require('./components/ExampleComponent.vue').default);


import Vue from 'vue'
import vuetify from'./plugins/vuetify'

const app = new Vue({
    el: '#app',
    vuetify: vuetify,
});
