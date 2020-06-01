/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'
Vue.use(VueRouter)

const example = require('./components/ExampleComponent.vue');
const tasks = require('./components/TasksComponent.vue');
const Bar = { template: '<div>bar</div>' };

const routes =[
    {
        path: '/example',
        component: example.default
    },
    {
        path: '/tasks',
        component: tasks.default
    }
]

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);


const router = new VueRouter({
    routes
})

const app = new Vue({
    el: '#app',
    router
});
