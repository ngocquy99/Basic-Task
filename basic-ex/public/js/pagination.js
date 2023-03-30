
Vue.http.headers.common["X-CSRF-TOKEN"] = $("#token").attr("value");

window.Vue = require('vue').default;

Vue.component('app', require('./components/app.vue').default);

new Vue({
    el: "#app",

    data: {
        users: [],
        pagination: {
            total: 10,
            per_page: 15,
            from: 1,
            to: 15,
            current_page: 1,
        },
    },
});
