
/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');

window.Vue = require('vue');



Vue.component('status-form', require('./components/StatusForm'));

const app = new Vue({
    el: '#app'
});
