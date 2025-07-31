<template>
    <section class="relative min-h-screen flex flex-col justify-center items-center text-center">
        <!-- Background -->
        <div class="absolute inset-0">
            <!-- Professional gradient -->
            <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-purple-900 to-indigo-900"></div>
            <!-- Black overlay for contrast -->
            <div class="absolute inset-0 bg-black/30"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 pt-20 md:pt-20">
            <!-- Hero Badge -->
            <div
                class="inline-flex items-center px-4 py-2 rounded-full bg-gradient-to-r from-purple-500/20 to-cyan-500/20 border border-purple-500/30 backdrop-blur-sm mb-8"
            >
                <svg
                    class="h-4 w-4 text-yellow-400 mr-2"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M13 10V3L4 14h7v7l9-11h-7z"
                    />
                </svg>
                <span class="text-sm text-gray-300">Turkey's #1 Job Platform</span>
            </div>

            <!-- Hero Title -->
            <h1 class="text-5xl md:text-7xl font-bold mb-6">
                <span
                    class="bg-gradient-to-r from-white via-purple-200 to-cyan-200 bg-clip-text text-transparent"
                >
                    Discover the Job
                </span>
                <br />
                <span
                    class="bg-gradient-to-r from-cyan-400 via-purple-400 to-pink-400 bg-clip-text text-transparent"
                >
                    of the Future Today
                </span>
            </h1>

            <!-- Subtitle -->
            <p
                class="text-xl text-gray-300 mb-12 max-w-2xl mx-auto leading-relaxed"
            >
                Find your dream job with our AI-powered matching algorithm.
                Start a new era in your career.
            </p>

            <!-- Search -->
            <div class="max-w-5xl mx-auto mb-12">
                <div
                    class="bg-white/10 backdrop-blur-md rounded-2xl p-8 border border-white/20 shadow-2xl"
                >
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                        <div class="relative">
                            <input
                                v-model="search.keyword"
                                type="text"
                                placeholder="Job position, technology..."
                                class="w-full pl-4 pr-4 py-4 bg-white/10 border border-white/20 rounded-xl focus:ring-2 focus:ring-purple-500 text-white placeholder-gray-400"
                            />
                        </div>
                        <div>
                            <select
                                v-model="search.city"
                                class="w-full px-4 py-4 bg-white/10 border border-white/20 rounded-xl text-white"
                            >
                                <option class="bg-gray-800">Select City</option>
                                <option class="bg-gray-800">Istanbul</option>
                                <option class="bg-gray-800">Ankara</option>
                                <option class="bg-gray-800">Izmir</option>
                            </select>
                        </div>
                        <div>
                            <select
                                v-model="search.category"
                                class="w-full px-4 py-4 bg-white/10 border border-white/20 rounded-xl text-white"
                            >
                                <option class="bg-gray-800">Category</option>
                                <option class="bg-gray-800">Technology</option>
                                <option class="bg-gray-800">Design</option>
                                <option class="bg-gray-800">Marketing</option>
                            </select>
                        </div>
                    </div>
                    <button
                        @click="searchJobs"
                        class="w-full bg-gradient-to-r from-cyan-500 to-purple-500 text-white py-4 text-lg font-semibold rounded-xl shadow-lg hover:scale-[1.02]"
                    >
                        Search Jobs
                    </button>
                </div>
            </div>

            <!-- Trend Jobs -->
            <div class="mb-16">
                <h3
                    class="text-2xl font-bold text-white mb-8 flex items-center justify-center"
                >
                    Trending Job Fields
                </h3>
                <div
                    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4"
                >
                    <div
                        v-for="(job, index) in trendingJobs"
                        :key="index"
                        class="bg-gradient-to-r p-4 rounded-xl shadow-lg hover:scale-105 transition"
                        :class="job.color"
                    >
                        <div class="text-white font-semibold mb-2">
                            {{ job.title }}
                        </div>
                        <div class="text-white/80 text-sm flex items-center">
                            📈 {{ job.growth }}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats -->
            <div class="py-16 px-4">
                <div class="max-w-6xl mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div
                            class="bg-white/10 p-8 rounded-2xl border border-white/20 text-center hover:scale-105 transition"
                        >
                            <div class="text-5xl font-bold text-cyan-400 mb-2">
                                15,000+
                            </div>
                            <div class="text-gray-300">Active Job Listings</div>
                        </div>
                        <div
                            class="bg-white/10 p-8 rounded-2xl border border-white/20 text-center hover:scale-105 transition"
                        >
                            <div class="text-5xl font-bold text-purple-400 mb-2">
                                3,500+
                            </div>
                            <div class="text-gray-300">Registered Companies</div>
                        </div>
                        <div
                            class="bg-white/10 p-8 rounded-2xl border border-white/20 text-center hover:scale-105 transition"
                        >
                            <div class="text-5xl font-bold text-pink-400 mb-2">
                                125,000+
                            </div>
                            <div class="text-gray-300">Successful Matches</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "HeroSection",
    data() {
        return {
            search: {
                keyword: "",
                city: "",
                category: ""
            },
            trendingJobs: [
                { title: "AI/ML Engineer", growth: "+45%", color: "from-purple-500 to-pink-500" },
                { title: "Blockchain Developer", growth: "+38%", color: "from-blue-500 to-cyan-500" },
                { title: "Data Scientist", growth: "+32%", color: "from-green-500 to-teal-500" },
                { title: "Cybersecurity Specialist", growth: "+28%", color: "from-red-500 to-orange-500" }
            ]
        };
    },
    methods: {
        searchJobs() {
            console.log("Search:", this.search);
        }
    }
};
</script>
