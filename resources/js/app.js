/* eslint-disable no-undef */
import Vue from 'vue'
import { InertiaApp } from '@inertiajs/inertia-vue'

Vue.use(InertiaApp)
Vue.prototype.$route = (...args) => route(...args).url()

const app = document.getElementById('app')

new Vue({
    render: h =>
        h(InertiaApp, {
            props: {
                initialPage: JSON.parse(app.dataset.page),
                resolveComponent: name => require(`./Pages/${name}`).default,
            },
        }),
}).$mount(app)
