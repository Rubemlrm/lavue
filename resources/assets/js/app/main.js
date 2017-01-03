// Require bootstrap and jquery
window.$ = window.jQuery = require('jquery');

// Load vue libs
import Vue from 'vue'
import App from './components/app.vue'
import vueResource from 'vue-resource'
import router from './router'

/**
 * tell vue to user vue resource
 */
Vue.use(vueResource)

// Register global components
Vue.component('sidebar', require('./components/sidebar.vue'))
Vue.component('navbar', require('./components/navbar.vue'))

/**
 * We'll register a HTTP interceptor to attach the "CSRF" header to each of
 * the outgoing requests issued by this application. The CSRF middleware
 * included with Laravel will automatically verify the header's value.
 */
Vue.http.interceptors.push((request, next) => {
        request.headers.set('X-CSRF-TOKEN', Laravel.csrfToken)
        next()
})


// set custom configs
Vue.config.debug = true
Vue.http.options.root = "/api";

//extend vue to handle with routing
new Vue(
  Vue.util.extend(
    {
      router
    },
    App
  )
).$mount('#app')
