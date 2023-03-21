require('./bootstrap');

import Vue from 'vue';
import {createInertiaApp} from '@inertiajs/inertia-vue';
import {InertiaProgress} from '@inertiajs/progress';
import Vuetify from 'vuetify';
import colors from 'vuetify/lib/util/colors';

const vuetify = new Vuetify({
    theme: {
        themes: {
            light: {
                primary: '#0033CC',
                secondary: '#757575',
                accent: colors.white,
                error: colors.red,
            },
        },
    },
});

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({el, app, props, plugin}) {
        Vue.use(plugin)
            .mixin({methods: {route}})
            .use(Vuetify);
        new Vue({
            vuetify: vuetify,
            render: h => h(app, props),
        }).$mount(el)
    },
});

InertiaProgress.init({color: '#11532A'});
