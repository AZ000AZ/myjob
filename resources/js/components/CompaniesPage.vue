<template>
    <section class="relative min-h-screen flex flex-col">
        <!-- Hero -->
        <div class="relative flex-1">
            <div class="absolute inset-0">
                <img :src="backgroundImage" class="w-full h-full object-cover"/>
                <div class="absolute inset-0 bg-gradient-to-br from-blue-600/80 via-indigo-600/70 to-purple-600/80"></div>
            </div>
            <div class="relative z-10 text-center text-white pt-32 pb-16">
                <h1 class="text-5xl font-bold mb-4">Şirketleri Tanı</h1>
                <p class="text-xl text-white/90">En iyi işverenlerle tanış, kariyerini geliştir</p>
            </div>
        </div>

        <!-- İçerik -->
        <div class="relative bg-white py-16 px-4">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-6">
                <div v-for="company in companies" :key="company.name"
                     class="bg-gray-50 rounded-xl shadow-lg hover:shadow-2xl transition p-6 border border-gray-100 text-center">
                    <img :src="company.logo" alt="" class="w-20 h-20 mb-4 rounded-full object-cover mx-auto">
                    <h2 class="text-lg font-bold">{{ company.name }}</h2>
                    <p class="text-gray-500 text-sm">{{ company.industry }}</p>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            backgroundImage: '/images/companies-bg.jpg',
            companies: [
                { name: 'TechCorp', industry: 'Yazılım', logo: 'https://via.placeholder.com/80' },
                { name: 'DesignPro', industry: 'Tasarım', logo: 'https://via.placeholder.com/80' },
                { name: 'MarketX', industry: 'Pazarlama', logo: 'https://via.placeholder.com/80' },
                { name: 'CloudNet', industry: 'Bulut Bilişim', logo: 'https://via.placeholder.com/80' }
            ]
        }
    }
}
</script>
