require('./bootstrap');

window.Vue = require('vue');


import Vuetify from "../plugins/vuetify";


Vue.component("scaffold-component", require("./components/scaffold.vue").default);
Vue.component("constrained-component", require("./components/ConstrainedScaffold.vue").default);

const app = new Vue({
    el: '#app',
    vuetify: Vuetify
});
