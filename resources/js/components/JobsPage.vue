<template>
    <section class="relative flex flex-col">
        <!-- Hero -->
        <div class="relative h-[650px] overflow-hidden animated-gradient clip-hero">
            <div class="absolute inset-0 bg-black/30"></div>
            <div class="relative z-10 text-center text-white flex flex-col items-center justify-center h-full">
                <h1 class="text-4xl font-bold mb-2">
                    İş İlanlarını <span class="text-yellow-300">Keşfet</span>
                </h1>
                <p class="text-lg">Tüm açık pozisyonları burada bulabilirsiniz.</p>
            </div>

            <!-- Zigzag Divider -->
            <svg class="absolute bottom-0 left-0 w-full" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0 60,20 120,0 180,20 240,0 300,20 360,0 420,20 480,0 540,20 600,0 660,20 720,0 780,20 840,0 900,20 960,0 1020,20 1080,0 1140,20 1200,0 V120 H0 Z" fill="#f9fafb"></path>
            </svg>
        </div>


        <!-- Content Area -->
        <div class="bg-gradient-to-br from-orange-50 via-pink-50 to-red-50 py-1 px-4">


        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-6">
                <!-- Filters -->
                <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100">
                    <h2 class="text-xl font-bold mb-6 flex items-center gap-2">
                        <i class="bi bi-funnel-fill text-orange-500"></i>
                        Filtreler
                    </h2>
                    <!-- Şehir -->
                    <label class="block mb-2 font-medium">Şehir</label>
                    <div class="flex items-center mb-4">
                        <i class="bi bi-geo-alt text-gray-400 mr-2"></i>
                        <select v-model="filters.city" class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-orange-400">
                            <option value="">Tümü</option>
                            <option>İstanbul</option>
                            <option>Ankara</option>
                            <option>İzmir</option>
                        </select>
                    </div>
                    <!-- Kategori -->
                    <label class="block mb-2 font-medium">Kategori</label>
                    <div class="flex items-center mb-4">
                        <i class="bi bi-tags text-gray-400 mr-2"></i>
                        <select v-model="filters.category" class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-orange-400">
                            <option value="">Tümü</option>
                            <option>Yazılım</option>
                            <option>Pazarlama</option>
                            <option>Tasarım</option>
                        </select>
                    </div>
                    <!-- Çalışma Şekli -->
                    <label class="block mb-2 font-medium">Çalışma Şekli</label>
                    <div class="space-y-2 mb-6">
                        <label class="flex items-center gap-2">
                            <input type="radio" value="Tam Zamanlı" v-model="filters.type" class="accent-orange-500" />
                            Tam Zamanlı
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" value="Yarı Zamanlı" v-model="filters.type" class="accent-orange-500" />
                            Yarı Zamanlı
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" value="Uzaktan" v-model="filters.type" class="accent-orange-500" />
                            Uzaktan
                        </label>
                    </div>
                    <button @click="applyFilters" class="bg-orange-500 hover:bg-orange-600 transition text-white w-full py-2 rounded-lg font-medium">
                        <i class="bi bi-filter-circle mr-2"></i> Filtreleri Uygula
                    </button>
                </div>

                <!-- Job Listings -->
                <div class="md:col-span-3 grid grid-cols-1 gap-6">
                    <div v-for="job in jobs" :key="job.id"
                         class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition p-6 border border-gray-100">
                        <h2 class="text-lg font-bold">{{ job.title }}</h2>
                        <p class="text-gray-500 text-sm">{{ job.company }}</p>
                        <p class="text-gray-400 text-sm mb-3">{{ job.city }}, {{ job.country }}</p>
                        <button class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-lg">
                            Detay
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            jobs: [],
            filters: {
                city: '',
                category: '',
                type: ''
            }
        }
    },
    mounted() {
        this.getJobs()
    },
    methods: {
        async getJobs() {
            try {
                const params = new URLSearchParams(this.filters).toString()
                const res = await fetch(`/jobs-data?${params}`)
                this.jobs = await res.json()
            } catch (err) {
                console.error('İş ilanları alınamadı:', err)
            }
        },
        applyFilters() {
            this.getJobs()
        }
    }
}
</script>

<style scoped>
.clip-hero {
    clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);
}

/* Animated Gradient */
.animated-gradient {
    background: linear-gradient(-45deg, #f97316, #ec4899, #f97316, #ec4899);
    background-size: 400% 400%;
    animation: gradientMove 10s ease infinite;
}

@keyframes gradientMove {
    0% {background-position: 0% 50%;}
    50% {background-position: 100% 50%;}
    100% {background-position: 0% 50%;}
}
</style>
