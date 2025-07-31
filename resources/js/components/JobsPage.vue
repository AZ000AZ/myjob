<template>
    <section class="relative pt-28 pb-16 px-4 bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 min-h-screen overflow-y-auto">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-4 gap-8">

            <!-- Filters -->
            <div class="lg:col-span-1 bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-6 shadow-xl sticky top-28 self-start">
                <h2 class="text-xl font-bold text-white mb-6 flex items-center gap-2">
                    <i class="bi bi-funnel-fill text-purple-400"></i> Filters
                </h2>

                <!-- City -->
                <label class="block text-gray-300 mb-2">City</label>
                <select v-model="filters.city"
                        class="w-full mb-6 px-3 py-2 bg-white/10 border border-white/20 rounded-lg text-white focus:ring-2 focus:ring-purple-500">
                    <option class="bg-gray-800">All</option>
                    <option class="bg-gray-800">Istanbul</option>
                    <option class="bg-gray-800">Ankara</option>
                    <option class="bg-gray-800">Izmir</option>
                </select>

                <!-- Category -->
                <label class="block text-gray-300 mb-2">Category</label>
                <select v-model="filters.category"
                        class="w-full mb-6 px-3 py-2 bg-white/10 border border-white/20 rounded-lg text-white focus:ring-2 focus:ring-purple-500">
                    <option class="bg-gray-800">All</option>
                    <option class="bg-gray-800">Software</option>
                    <option class="bg-gray-800">Marketing</option>
                    <option class="bg-gray-800">Design</option>
                </select>

                <!-- Type -->
                <label class="block text-gray-300 mb-2">Job Type</label>
                <div class="space-y-2 mb-6">
                    <label v-for="type in ['Full Time','Part Time','Remote']" :key="type" class="flex items-center gap-2">
                        <input type="radio" v-model="filters.type" :value="type" class="accent-purple-500">
                        <span class="text-gray-300">{{ type }}</span>
                    </label>
                </div>

                <button @click="applyFilters"
                        class="w-full py-2 rounded-lg bg-gradient-to-r from-cyan-500 to-purple-500 text-white font-semibold shadow-lg hover:scale-[1.02] transition">
                    Apply Filters
                </button>
            </div>

            <!-- Job Listings -->
            <div class="lg:col-span-3 grid grid-cols-1 gap-6">
                <div v-for="job in jobs" :key="job.id"
                     class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-6 transition-all duration-300 hover:bg-white/20 hover:scale-[1.02] hover:shadow-2xl group">

                    <!-- Title & Company -->
                    <div class="flex justify-between items-center mb-3">
                        <div>
                            <h3 class="text-lg font-bold text-white group-hover:text-cyan-300">{{ job.title }}</h3>
                            <p class="text-purple-300">{{ job.company }}</p>
                        </div>
                        <span class="text-cyan-400 font-semibold">{{ job.salary }}</span>
                    </div>

                    <!-- Location -->
                    <div class="flex items-center text-gray-400 text-sm mb-3">
                        <i class="bi bi-geo-alt mr-2"></i>{{ job.city }}
                    </div>

                    <!-- Tags -->
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span v-for="tag in job.tags" :key="tag"
                              class="px-3 py-1 bg-gradient-to-r from-purple-500/20 to-cyan-500/20 border border-purple-500/30 text-purple-200 text-xs rounded-full">
                            {{ tag }}
                        </span>
                    </div>

                    <!-- Apply Button -->
                    <button
                        class="bg-gradient-to-r from-cyan-500 to-purple-500 hover:from-cyan-600 hover:to-purple-600 text-white px-4 py-2 rounded-lg shadow-lg shadow-purple-500/25">
                        Apply
                    </button>
                </div>
            </div>

        </div>
    </section>
</template>

<script>
export default {
    name: "JobsPage",
    data() {
        return {
            filters: {
                city: "",
                category: "",
                type: ""
            },
            jobs: [
                {
                    id: 1,
                    title: "Frontend Developer",
                    company: "TechCorp",
                    city: "Istanbul",
                    salary: "20,000 - 30,000 TRY",
                    tags: ["Vue.js", "Tailwind", "SPA"]
                },
                {
                    id: 2,
                    title: "Backend Developer",
                    company: "CodeWorks",
                    city: "Ankara",
                    salary: "18,000 - 28,000 TRY",
                    tags: ["Laravel", "MySQL", "API"]
                }
            ]
        };
    },
    methods: {
        applyFilters() {
            console.log("Filters applied:", this.filters);
        }
    }
};
</script>
