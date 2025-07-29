<template>
    <div class="bg-white rounded-2xl shadow-lg p-4 flex flex-col md:flex-row items-center gap-4 max-w-5xl mx-auto">
        <!-- Keyword -->
        <div class="flex items-center border rounded-lg px-3 py-2 flex-1">
            <i class="fas fa-briefcase text-gray-400 mr-2"></i>
            <input
                v-model="keyword"
                placeholder="Örn: Frontend Developer"
                class="flex-1 outline-none bg-transparent text-gray-700" />
        </div>

        <!-- City -->
        <div class="flex items-center border rounded-lg px-3 py-2 flex-1">
            <i class="fas fa-map-marker-alt text-gray-400 mr-2"></i>
            <select v-model="city" class="flex-1 outline-none bg-transparent text-gray-700">
                <option value="">Tüm Şehirler</option>
                <option value="istanbul">İstanbul</option>
                <option value="ankara">Ankara</option>
            </select>
        </div>

        <!-- Type -->
        <div class="flex items-center border rounded-lg px-3 py-2 flex-1">
            <i class="fas fa-clock text-gray-400 mr-2"></i>
            <select v-model="type" class="flex-1 outline-none bg-transparent text-gray-700">
                <option value="">Tüm Türler</option>
                <option value="full-time">Tam Zamanlı</option>
            </select>
        </div>

        <!-- Button -->
        <button
            @click="searchJobs"
            class="flex items-center justify-center bg-gradient-to-r from-orange-500 to-red-500 text-white font-semibold px-6 py-3 rounded-lg shadow hover:from-orange-600 hover:to-red-600 transition">
            <i class="fas fa-search mr-2"></i> İş Ara
        </button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            keyword: '',
            city: '',
            type: ''
        }
    },
    methods: {
        searchJobs() {
            const url = `/jobs/search?keyword=${this.keyword}&city=${this.city}&type=${this.type}`
            window.location.href = url
        }
    }
}
</script>
