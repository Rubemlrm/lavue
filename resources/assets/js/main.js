// Require bootstrap and jquery
window.$ = window.jQuery = require('jquery');
require('bootstrap-sass');


// Load vue libs
import Vue from 'vue'
import VueRouter from 'vue-router'
import vueResource from 'vue-resource'

/**
 * tell vue to user router and resource
 */
Vue.use(VueRouter)
Vue.use(vueResource)

/**
 * import user defined components
 */
import App from './components/app.vue'
import userIndex from './components/users/index.vue'
import userEdit from './components/users/edit.vue'
import userAdd from './components/users/add.vue'

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


//init route list
const routes = [
    {
      path: '/users',
      component: userIndex
    },
    {
      path: '/users/edit',
      component: userEdit
    },
    {
      path: '/users/add',
      component: userAdd
    }
  ];

//init app
var router = new VueRouter({
    routes,
    history: true,
    root: '/admin',
    saveScrollPosition: true,
    transitionOnLoad: true
});

//extend vue to handle with routing
new Vue(
    Vue.util.extend(
      {
        router
      },
      App
    )
  ).$mount('#app')