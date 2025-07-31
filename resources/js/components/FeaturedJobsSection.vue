<template>
    <section class="py-16 px-4">
        <div class="max-w-7xl mx-auto">
            <!-- Title -->
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold bg-gradient-to-r from-cyan-500 to-gray-300 bg-clip-text text-transparent mb-4">
                    Premium Job Opportunities
                </h2>
                <p class="text-gray-400 text-lg">Specially selected positions from top companies</p>
            </div>

            <!-- Job Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div v-for="job in featuredJobs" :key="job.id" class="group cursor-pointer">
                    <div class="bg-gradient-to-br from-white/90 to-gray-100/80 backdrop-blur-lg rounded-2xl p-6 shadow-lg">

                        <!-- Company Info -->
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center">
                                <div
                                    class="w-12 h-12 bg-gradient-to-r from-cyan-500 to-purple-500 rounded-xl flex items-center justify-center text-2xl mr-3"
                                >
                                    {{ job.logo }}
                                </div>
                                <div>
                                    <div class="text-white font-semibold">{{ job.company }}</div>
                                    <div class="text-gray-400 text-sm">{{ job.timeAgo }}</div>
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <button class="text-gray-400 hover:text-white hover:bg-white/10 rounded-full p-2">
                                    <i class="fas fa-bookmark"></i>
                                </button>
                                <button class="text-gray-400 hover:text-white hover:bg-white/10 rounded-full p-2">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Job Title -->
                        <h3
                            class="text-xl font-bold text-white mb-2 group-hover:text-cyan-300 transition-colors"
                        >
                            {{ job.title }}
                        </h3>

                        <!-- Job Meta -->
                        <div class="flex items-center text-gray-400 text-sm mb-4">
                            <i class="fas fa-map-marker-alt mr-1"></i> {{ job.location }}
                            <span class="mx-2">•</span>
                            <i class="fas fa-briefcase mr-1"></i> {{ job.type }}
                        </div>

                        <!-- Tags -->
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span
                                v-for="tag in job.tags"
                                :key="tag"
                                class="px-3 py-1 bg-gradient-to-r from-purple-500/20 to-cyan-500/20 border border-purple-500/30 text-purple-200 text-xs rounded-full"
                            >
                                {{ tag }}
                            </span>
                        </div>

                        <!-- Salary + Button -->
                        <div class="flex justify-between items-center">
                            <div>
                                <div
                                    class="text-2xl font-bold bg-gradient-to-r from-cyan-400 to-purple-400 bg-clip-text text-transparent"
                                >
                                    {{ job.salary }}
                                </div>
                                <div class="text-gray-400 text-sm">{{ job.applicants }} applications</div>
                            </div>
                            <button
                                class="bg-gradient-to-r from-cyan-500 to-purple-500 hover:from-cyan-600 hover:to-purple-600 text-white px-4 py-2 rounded-lg shadow-lg shadow-purple-500/25"
                            >
                                Apply
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "FeaturedJobsSection",
    data() {
        return {
            featuredJobs: [
                {
                    id: 1,
                    title: "Senior Frontend Developer",
                    company: "TechVision",
                    location: "Istanbul",
                    salary: "25,000 - 35,000 TRY",
                    timeAgo: "2 hours ago",
                    tags: ["React", "TypeScript", "Next.js"],
                    type: "Full Time",
                    logo: "🚀",
                    applicants: 47,
                },
                {
                    id: 2,
                    title: "Product Designer",
                    company: "DesignLab",
                    location: "Ankara",
                    salary: "20,000 - 28,000 TRY",
                    timeAgo: "4 hours ago",
                    tags: ["Figma", "UI/UX", "Prototyping"],
                    type: "Full Time",
                    logo: "🎨",
                    applicants: 23,
                },
                {
                    id: 3,
                    title: "DevOps Engineer",
                    company: "CloudTech",
                    location: "Izmir",
                    salary: "30,000 - 40,000 TRY",
                    timeAgo: "1 day ago",
                    tags: ["AWS", "Docker", "Kubernetes"],
                    type: "Remote",
                    logo: "☁️",
                    applicants: 31,
                },
            ],
        };
    },
};
</script>
