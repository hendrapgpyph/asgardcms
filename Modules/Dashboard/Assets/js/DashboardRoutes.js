import Dashboard from './components/Dashboard.vue';

const locales = window.AsgardCMS.locales;

export default [
    // Role Routes
    {
        path: '/',
        name: 'dashboard.index',
        component: Dashboard,
    },
];
