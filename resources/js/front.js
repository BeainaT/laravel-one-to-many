window.Vue = require('Vue');
import App from './views/App.vue';
import Vue from 'vue';

const app = new Vue({
    el: '#app',
    render: h => h(App)
});