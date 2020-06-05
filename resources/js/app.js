
/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');

window.Vue = require('vue');

window.EventBus = new Vue();

Vue.component('status-form', require('./components/StatusForm'));
Vue.component('status-list', require('./components/StatusList'));
Vue.component('friendship-btn', require('./components/FriendshipBtn'));
Vue.component('accept-friendship-btn', require('./components/AcceptFriendshipBtn'));
Vue.component('notification-list', require('./components/NotificationList'));

import auth from './mixins/auth';
Vue.mixin(auth);

const app = new Vue({
    el: '#app'
});
