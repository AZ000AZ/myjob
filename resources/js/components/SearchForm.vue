<template>
    <div class="bg-white rounded-2xl shadow-lg p-6 max-w-5xl mx-auto space-y-5">

        <!-- Work Type Title -->
        <label class="block text-gray-700 font-semibold mb-2">Work Type</label>
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

        <!-- Filter Section -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-3">

            <!-- Select Country -->
            <div>
                <label class="block text-gray-700 font-semibold mb-1">Select Country</label>
                <div class="flex items-center border rounded-lg px-3 py-2 bg-gray-50">
                    <i class="fas fa-map-marker-alt text-orange-500 mr-2"></i>
                    <select v-model="country" class="flex-1 outline-none bg-transparent">
                        <option value="turkiye">Turkey</option>
                        <option value="usa">USA</option>
                        <option value="europe">Europe</option>
                    </select>
                </div>
            </div>

            <!-- Select City -->
            <div>
                <label class="block text-gray-700 font-semibold mb-1">Select City</label>
                <div class="flex items-center border rounded-lg px-3 py-2 bg-gray-50">
                    <i class="fas fa-map-marker-alt text-orange-500 mr-2"></i>
                    <select v-model="city" class="flex-1 outline-none bg-transparent">
                        <option value="">Select City</option>
                        <option value="istanbul">Istanbul</option>
                        <option value="ankara">Ankara</option>
                        <option value="izmir">Izmir</option>
                    </select>
                </div>
            </div>

            <!-- Keyword -->
            <div>
                <label class="block text-gray-700 font-semibold mb-1">Keyword</label>
                <div class="flex items-center border rounded-lg px-3 py-2 bg-gray-50">
                    <i class="fas fa-briefcase text-orange-500 mr-2"></i>
                    <input v-model="keyword" placeholder="Keyword" class="flex-1 outline-none bg-transparent" />
                </div>
            </div>

            <!-- Search Button -->
            <div class="flex items-end">
                <button @click="searchJobs"
                        class="flex items-center justify-center bg-orange-500 hover:bg-orange-600 text-white font-semibold rounded-lg shadow transition w-full h-[42px]">
                    <i class="fas fa-search mr-2"></i> Search
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
            workTypes: ['Full Time', 'Part Time', 'Contract', 'Remote']
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
