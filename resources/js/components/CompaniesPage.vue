<template>
    <section class="relative flex flex-col">
        <!-- Hero -->
        <div
            class="relative h-[700px] overflow-hidden clip-hero"
        >
            <img
                :src="backgroundImage"
                class="absolute inset-0 w-full h-full object-cover object-center"
            />
            <div class="absolute inset-0 bg-black/30"></div>
            <div class="relative z-10 text-center text-white flex flex-col items-center justify-center h-full">
                <h1 class="text-5xl font-bold mb-4">Şirketleri Tanı</h1>
                <p class="text-xl text-white/90">En iyi işverenlerle tanış, kariyerini geliştir</p>

                <!-- Search Bar -->
                <div class="mt-8 w-full max-w-3xl bg-white rounded-lg shadow-lg flex items-center overflow-hidden">
                    <div class="flex items-center px-4 text-gray-500">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <input
                        v-model="searchQuery"
                        type="text"
                        placeholder="Firma & Kuruluş Adı"
                        class="flex-1 px-3 py-4 outline-none text-gray-700"
                    />
                    <button
                        @click="searchCompanies"
                        class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-4 font-semibold">
                        Keşfet
                    </button>
                </div>
            </div>
        </div>

        <!-- İçerik -->
        <div class="bg-gray-50 py-16 px-4">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-6">
                <div v-for="company in filteredCompanies" :key="company.name"
                     class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition p-6 border border-gray-100 text-center">
                    <img :src="company.logo" alt="" class="w-20 h-20 mb-4 rounded-full object-cover mx-auto">
                    <h2 class="text-lg font-bold">{{ company.name }}</h2>
                    <p class="text-gray-500 text-sm">{{ company.industry }}</p>
                    <button class="mt-4 bg-orange-500 text-white px-4 py-2 rounded-lg">İncele</button>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            backgroundImage: '/images/sirket4.jpg',
            searchQuery: '',
            companies: [
                { name: 'TechCorp', industry: 'Yazılım', logo: 'https://via.placeholder.com/80' },
                { name: 'DesignPro', industry: 'Tasarım', logo: 'https://via.placeholder.com/80' },
                { name: 'MarketX', industry: 'Pazarlama', logo: 'https://via.placeholder.com/80' },
                { name: 'CloudNet', industry: 'Bulut Bilişim', logo: 'https://via.placeholder.com/80' }
            ]
        }
    },
    computed: {
        filteredCompanies() {
            if (!this.searchQuery) return this.companies;
            return this.companies.filter(c =>
                c.name.toLowerCase().includes(this.searchQuery.toLowerCase())
            );
        }
    },
    methods: {
        searchCompanies() {
            console.log("Arama yapıldı:", this.searchQuery);
        }
    }
}
</script>

<style scoped>
.clip-hero {
    clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
}
</style>
