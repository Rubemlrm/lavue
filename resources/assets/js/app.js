//load bootstrap stuff
import VueRouter from 'vue-router'
import App from './components/app.vue'
import Example from './components/Example.vue'
Vue.use(VueRouter)

//register global components
Vue.component('sidebar',require('./components/sidebar.vue'))
Vue.component('navbar',require('./components/navbar.vue'))


//init route list
const routes = [
      { path: '/teste', component: Example },
      //{ path: '*', component: example}
    ];

//init router
var router = new VueRouter({
   routes,
    history: true,
    root: '/',
    saveScrollPosition: true,
    transitionOnLoad: true
});

//extend vue to handle with routing
new Vue(Vue.util.extend({ router }, App)).$mount('#app')