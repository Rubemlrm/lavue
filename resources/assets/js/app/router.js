import Vue from 'vue'
import Router from 'vue-router'


Vue.use(Router)

/**
 * import user defined components
 */
import userIndex from './components/users/index.vue'
import userEdit from './components/users/edit.vue'
import userAdd from './components/users/add.vue'



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
export default new Router({
    routes,
    base: '/admin',
    mode: 'history',
    saveScrollPosition: true,
    transitionOnLoad: true,
    linkActiveClass: "is-active"
});