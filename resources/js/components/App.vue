<template>
    <div id="app">
        <HeaderSection />
        <HeroSection />
        <CategoriesSection />
        <FeaturedJobsSection />
        <FooterSection />
    </div>
</template>

<script>
import HeroSection from './HeroSection.vue';
import CategoriesSection from './CategoriesSection.vue';
import FeaturedJobsSection from './FeaturedJobsSection.vue';
import FooterSection from './FooterSection.vue';

export default {
    name: 'App',
    components: {
        HeroSection,
        CategoriesSection,
        FeaturedJobsSection,
        FooterSection
    }
}
</script>

<style>
html, body {
    margin: 0;
    padding: 0;
    font-family: 'Inter', sans-serif;
    background-color: #f8fafc;
}
</style>
