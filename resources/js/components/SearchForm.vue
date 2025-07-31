<template>
    <div class="bg-white rounded-2xl shadow-lg p-6 max-w-5xl mx-auto space-y-5">

        <!-- Çalışma Şekli Başlık -->
        <label class="block text-gray-700 font-semibold mb-2">Çalışma Şekli</label>
        <div class="grid grid-cols-4 border rounded-lg overflow-hidden text-center text-sm font-medium text-gray-700">
            <button v-for="typeOption in workTypes" :key="typeOption"
                    @click="type = typeOption"
                    :class="[
          'py-2 hover:bg-orange-100 transition',
          type === typeOption ? 'bg-orange-500 text-white' : 'bg-white'
        ]">
                {{ typeOption }}
            </button>
        </div>

        <!-- Filtre Alanı -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-3">

            <!-- Ülke Seç -->
            <div>
                <label class="block text-gray-700 font-semibold mb-1">Ülke Seç</label>
                <div class="flex items-center border rounded-lg px-3 py-2 bg-gray-50">
                    <i class="fas fa-map-marker-alt text-orange-500 mr-2"></i>
                    <select v-model="country" class="flex-1 outline-none bg-transparent">
                        <option value="turkiye">Türkiye</option>
                        <option value="abd">ABD</option>
                        <option value="avrupa">Avrupa</option>
                    </select>
                </div>
            </div>

            <!-- Şehir Seç -->
            <div>
                <label class="block text-gray-700 font-semibold mb-1">Şehir Seç</label>
                <div class="flex items-center border rounded-lg px-3 py-2 bg-gray-50">
                    <i class="fas fa-map-marker-alt text-orange-500 mr-2"></i>
                    <select v-model="city" class="flex-1 outline-none bg-transparent">
                        <option value="">Şehir Seç</option>
                        <option value="istanbul">İstanbul</option>
                        <option value="ankara">Ankara</option>
                        <option value="izmir">İzmir</option>
                    </select>
                </div>
            </div>

            <!-- Anahtar Kelime -->
            <div>
                <label class="block text-gray-700 font-semibold mb-1">Anahtar Kelime</label>
                <div class="flex items-center border rounded-lg px-3 py-2 bg-gray-50">
                    <i class="fas fa-briefcase text-orange-500 mr-2"></i>
                    <input v-model="keyword" placeholder="Anahtar Kelime" class="flex-1 outline-none bg-transparent" />
                </div>
            </div>

            <!-- Arama Butonu -->
            <div class="flex items-end">
                <button @click="searchJobs"
                        class="flex items-center justify-center bg-orange-500 hover:bg-orange-600 text-white font-semibold rounded-lg shadow transition w-full h-[42px]">
                    <i class="fas fa-search mr-2"></i> Ara
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            keyword: '',
            city: '',
            country: 'turkiye',
            type: '',
            workTypes: ['Tam Zamanlı', 'Yarı Zamanlı', 'Sözleşmeli', 'Uzaktan']
        }
    },
    methods: {
        searchJobs() {
            const url = `/jobs/search?keyword=${this.keyword}&city=${this.city}&country=${this.country}&type=${this.type}`
            window.location.href = url
        }
    }
}
</script>
