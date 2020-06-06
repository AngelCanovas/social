
/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');

window.Vue = require('vue');

window.EventBus = new Vue();

Vue.component('status-form', require('./components/StatusForm').default);
Vue.component('status-list', require('./components/StatusList').default);
Vue.component('status-list-item', require('./components/StatusListItem').default);
Vue.component('friendship-btn', require('./components/FriendshipBtn').default);
Vue.component('accept-friendship-btn', require('./components/AcceptFriendshipBtn').default);
Vue.component('notification-list', require('./components/NotificationList').default);

import auth from './mixins/auth';
Vue.mixin(auth);

const app = new Vue({
    el: '#app'
});
