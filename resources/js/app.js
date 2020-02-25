import Vue from 'vue'
import { InertiaApp } from '@inertiajs/inertia-vue'

Vue.use(InertiaApp)

const app = document.getElementById('app')

new Vue({
    render: h =>
        h(InertiaApp, {
            props: {
                initialPage: JSON.parse(app.dataset.page),
                // eslint-disable-next-line no-undef
                resolveComponent: name => require(`./Pages/${name}`).default,
            },
        }),
}).$mount(app)
