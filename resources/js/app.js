/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

// import {
//     InertiaApp,
//     createInertiaApp
// } from '@inertiajs/inertia-vue'


Vue.use(InertiaApp);



// new Vue({
//     render: h => h(InertiaApp, {
//         props: {
//             initialPage: JSON.parse(app.dataset.page),
//             resolveComponent: name => import(`./Pages/${name}`).then(module => module.default),
//         },
//     }),
// }).$mount(app)
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('example-two', require('./components/ExampleTwo.vue').default);
Vue.component('hu-hu', require('./components/HuHu.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app',
// });


// require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import "tailwindcss/tailwind.css"
import {
    InertiaProgress
} from '@inertiajs/progress'

// createInertiaApp({
//     resolve: name => import(`./Pages/${name}`),
//     setup({
//         el,
//         App,
//         props
//     }) {
//         new Vue({
//             render: h => h(App, props),
//         }).$mount(el)
//     },
// })


// createInertiaApp({
//     title: (title) => `${title} - ${appName}`,
//     resolve: (name) => require(`./Pages/${name}.vue`),
//     setup({
//         el,
//         app,
//         props,
//         plugin
//     }) {
//         return createApp({
//                 render: () => h(app, props)
//             })
//             .use(plugin)
//             .mixin({
//                 methods: {
//                     route
//                 }
//             })
//             .mount(el);
//     },
// });
// InertiaProgress.init()

// import {
//     createApp,
//     h
// } from 'vue'
// import {
//     createInertiaApp
// } from '@inertiajs/inertia-vue3'
// createInertiaApp({
//     title: (title) => `${title} - ${appName}`,
//     resolve: (name) => require(`./Pages/${name}.vue`),
//     setup({
//         el,
//         app,
//         props,
//         plugin
//     }) {
//         return createApp({
//                 render: () => h(app, props)
//             })
//             .use(plugin)
//             .mixin({
//                 methods: {
//                     route
//                 }
//             })
//             .mount(el);
//     },
// });



import Vue from 'vue'
import {
    createInertiaApp
} from '@inertiajs/inertia-vue'

createInertiaApp({
    resolve: name => require(`./Pages/${name}`),
    setup({
        el,
        App,
        props
    }) {
        new Vue({
            render: h => h(App, props),
        }).$mount(el)
    },
});

InertiaProgress.init({
    color: '#4B5563'
});
