import './bootstrap';
import { createApp } from 'vue';

// Home page component
import App from './components/App.vue';

// Page-specific components
import JobsPage from './components/JobsPage.vue';
import CompaniesPage from './components/CompaniesPage.vue';
import GuidePage from './components/GuidePage.vue';
import ContactPage from './components/ContactPage.vue';

// Font Awesome
import '@fortawesome/fontawesome-free/css/all.min.css';

// Mount Home page
if (document.querySelector('#app')) {
    createApp(App).mount('#app');
}

// Mount Jobs page
if (document.querySelector('#jobs-app')) {
    createApp(JobsPage).mount('#jobs-app');
}

// Mount Companies page
if (document.querySelector('#companies-app')) {
    createApp(CompaniesPage).mount('#companies-app');
}

// Mount Guide page
if (document.querySelector('#guide-app')) {
    createApp(GuidePage).mount('#guide-app');
}

// Mount Contact page
if (document.querySelector('#contact-app')) {
    createApp(ContactPage).mount('#contact-app');
}
