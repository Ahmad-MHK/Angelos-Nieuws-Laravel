import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import angerloContact from './Components/angerloContact.vue';
import angerloFooter from './Components/angerloFooter.vue';
import angerloHeader from './Components/angerloHeader.vue';
import angerloHomePage from './Components/angerloHomePage.vue';
import angerloInloggen from './Components/angerloInloggen.vue';
import angerloLatestEditions from './Components/angerloLatestEditions.vue';
import angerloLatestNews from './Components/angerloLatestNews.vue';
import angerloPdf from './Components/angerloPdf.vue';
import backButton from './Components/backButton.vue';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

Vue.component('angerlo-contact', 
require('./Components/angerloContact.vue').default);

Vue.component('angerlo-footer', 
require('./Components/angerloFooter.vue').default);

Vue.component('angerlo-header', 
require('./Components/angerloHeader.vue').default);

Vue.component('angerlo-homepage', 
require('./Components/angerloHomePage.vue').default);

Vue.component('angerlo-inloggen', 
require('./Components/angerloInloggen.vue').default);

Vue.component('angerlo-latest-editions', 
require('./Components/angerloLatestEditions.vue').default);

Vue.component('angerlo-latest-news', 
require('./Components/angerloLatestNews.vue').default);

Vue.component('angerlo-pdf', 
require('./Components/angerloPdf.vue').default);

Vue.component('back-button', 
require('./Components/backButton.vue').default);

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
