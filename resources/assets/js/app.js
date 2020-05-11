
/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');

window.Vue = require('vue');


window.EventBus = new Vue();

Vue.component('status-form', require('./components/StatusForm'));
Vue.component('statuses-list', require('./components/StatusesList'));

const app = new Vue({
    el: '#app'
});
