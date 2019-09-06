
require('./bootstrap');
const config = require('./config.js');
window.Vue = require('vue');

import * as VueGoogleMaps from 'vue2-google-maps'

Vue.component('favorite', require('./components/Favorite.vue').default);
Vue.component('ticket-box', require('./components/TicketBox.vue').default);
Vue.component('google-cluster', VueGoogleMaps.Cluster);
Vue.component('gmap-infowindow', VueGoogleMaps.InfoWindow);
Vue.component('date-picker', require('./components/DatePicker.vue').default );

import Notifications from 'vue-notification'

Vue.use(Notifications);


Vue.use(VueGoogleMaps, {
    load: {
        key: config.GOOGLE_MAPS_API_KEY,
        v: "3.29"
    }
});

var axios = require('axios');

Vue.prototype.$http = axios;

const app = new Vue({
    el: '#app'
});
