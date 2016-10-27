//load bootstrap stuff
import VueRouter from 'vue-router'
import vueResource from 'vue-resource'
import App from './components/app.vue'
import Login from './components/login.vue'
import Users from './components/users.vue'
Vue.use(VueRouter)
Vue.use(vueResource)

Vue.config.debug = true

/**
 * We'll register a HTTP interceptor to attach the "CSRF" header to each of
 * the outgoing requests issued by this application. The CSRF middleware
 * included with Laravel will automatically verify the header's value.
 */

Vue.http.interceptors.push((request, next) => {
    request.headers.set('X-CSRF-TOKEN', Laravel.csrfToken)

    next()
})

//register global components
Vue.component('sidebar',require('./components/sidebar.vue'))
Vue.component('navbar',require('./components/navbar.vue'))


//init route list
const routes = [
      { path: '/users', component: Users }
    ];

//init router
var router = new VueRouter({
   routes,
    history: true,
    root: '/admin',
    saveScrollPosition: true,
    transitionOnLoad: true,
    hashbang: true
});


//extend vue to handle with routing
new Vue(Vue.util.extend({ router }, App)).$mount('#app')