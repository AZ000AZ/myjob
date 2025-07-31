import { createApp } from 'vue';
import Navbar from './components/Navbar.vue';
import App from './components/App.vue';
import CompaniesPage from './components/CompaniesPage.vue';
import AboutContactPage from './components/AboutContactPage.vue';

import JobsPage from './components/JobsPage.vue';

// Navbar
if (document.querySelector('#navbar-app')) {
    createApp(Navbar).mount('#navbar-app');
}

// Home (App.vue)
if (document.querySelector('#app')) {
    createApp(App).mount('#app');
}

// Companies Page
if (document.querySelector('#companies-app')) {
    createApp(CompaniesPage).mount('#companies-app');
}


// Jobs Page (Yeni ekleme)
if (document.querySelector('#jobs-app')) {
    createApp(JobsPage).mount('#jobs-app');
}

// Mount About & Contact page
if (document.querySelector('#about-contact-app')) {
    createApp(AboutContactPage).mount('#about-contact-app');
}
