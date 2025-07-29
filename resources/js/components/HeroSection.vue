<template>
    <section class="relative min-h-screen flex flex-col justify-center items-center text-center">
        <!-- Background -->
        <div class="absolute inset-0">
            <img :src="backgroundImage" class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-gradient-to-br from-orange-600/80 via-red-600/70 to-pink-600/80"></div>
            <div class="absolute inset-0 bg-black/20"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 max-w-4xl mx-auto px-4">
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-6">
                {{ heroTitle }} <span class="block text-yellow-300">{{ heroHighlight }}</span>
            </h1>
            <p class="text-xl md:text-2xl text-white/95 mb-8">
                {{ heroSubtitle }}
            </p>

            <!-- Search Form -->
            <SearchForm />
        </div>
    </section>
</template>

<script>
import SearchForm from './SearchForm.vue'

export default {
    components: { SearchForm },
    data() {
        return {
            heroTitle: 'Yeni Kariyer Fırsatlarını',
            heroHighlight: 'Keşfet',
            heroSubtitle: 'Binlerce iş fırsatı arasından size en uygun olanını bulun.',
            backgroundImage: '/images/background.jpg'
        }
    }
}
</script>
