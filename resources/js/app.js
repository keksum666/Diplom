require('./bootstrap');

window.Vue = require('vue').default;
Vue.component('film-card', require('./components/FilmCard.vue').default);

const app = new Vue({
    el: '#app',
});
