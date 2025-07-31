<template>
    <section
        class="relative pt-28 pb-16 px-4 bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 min-h-screen overflow-auto"
    >
        <div class="max-w-7xl mx-auto">
            <!-- Title -->
            <div class="text-center mb-12">
                <h2
                    class="text-4xl font-bold bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent mb-4"
                >
                    Premium Companies
                </h2>
                <p class="text-gray-400 text-lg">
                    Meet the top companies in Turkey
                </p>
            </div>

            <!-- Filters -->
            <div class="flex flex-col md:flex-row gap-4 mb-10">
                <input
                    type="text"
                    placeholder="Search by company name..."
                    class="flex-1 px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-gray-400 focus:ring-2 focus:ring-purple-500"
                />
                <select
                    class="px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white focus:ring-2 focus:ring-purple-500"
                >
                    <option class="bg-gray-800">All Industries</option>
                    <option class="bg-gray-800">Technology</option>
                    <option class="bg-gray-800">Finance</option>
                    <option class="bg-gray-800">Healthcare</option>
                </select>
                <button
                    class="bg-gradient-to-r from-cyan-500 to-purple-500 hover:from-cyan-600 hover:to-purple-600 text-white px-6 py-3 rounded-xl shadow-lg shadow-purple-500/25 hover:scale-105 transition-transform"
                >
                    Search
                </button>
            </div>

            <!-- Companies Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div
                    v-for="company in companies"
                    :key="company.id"
                    class="bg-white/10 backdrop-blur-md rounded-2xl p-6 border border-white/20 hover:bg-white/20 hover:scale-[1.02] hover:shadow-2xl hover:shadow-purple-500/20 transition-transform duration-300"
                >
                    <!-- Logo & Basic Info -->
                    <div class="text-center mb-6">
                        <div
                            class="w-20 h-20 bg-gradient-to-r from-cyan-500 to-purple-500 rounded-2xl flex items-center justify-center text-3xl mx-auto mb-4"
                        >
                            {{ company.logo }}
                        </div>
                        <h3
                            class="text-xl font-bold text-white mb-2 hover:text-cyan-300 transition-colors"
                        >
                            {{ company.name }}
                        </h3>
                        <p class="text-purple-300 mb-2 font-medium">
                            {{ company.industry }}
                        </p>
                        <p class="text-gray-400 text-sm">{{ company.location }}</p>
                    </div>

                    <!-- Stats -->
                    <div class="border-t border-white/20 pt-4">
                        <div class="grid grid-cols-3 gap-4 text-center mb-6">
                            <div>
                                <div
                                    class="text-lg font-bold bg-gradient-to-r from-cyan-400 to-purple-400 bg-clip-text text-transparent"
                                >
                                    {{ company.jobCount }}
                                </div>
                                <div class="text-xs text-gray-400">Positions</div>
                            </div>
                            <div>
                                <div
                                    class="text-lg font-bold bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent"
                                >
                                    {{ company.employeeCount }}
                                </div>
                                <div class="text-xs text-gray-400">Employees</div>
                            </div>
                            <div>
                                <div
                                    class="text-lg font-bold bg-gradient-to-r from-yellow-400 to-orange-400 bg-clip-text text-transparent"
                                >
                                    {{ company.rating }}
                                </div>
                                <div class="text-xs text-gray-400">Rating</div>
                            </div>
                        </div>

                        <!-- Description -->
                        <p class="text-gray-300 text-sm mb-6 line-clamp-3">
                            {{ company.description }}
                        </p>

                        <!-- Buttons -->
                        <div class="flex space-x-2">
                            <button
                                class="flex-1 bg-gradient-to-r from-cyan-500 to-purple-500 hover:from-cyan-600 hover:to-purple-600 text-white text-sm rounded-xl shadow-lg hover:scale-[1.03] transition-transform"
                            >
                                View Jobs
                            </button>
                            <button
                                class="flex-1 border border-purple-400/50 text-purple-300 hover:bg-purple-400/10 hover:text-white text-sm rounded-xl transition-colors"
                            >
                                Profile
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
    name: "CompaniesPage",
    data() {
        return {
            companies: [
                {
                    id: 1,
                    name: "TechVision",
                    industry: "Technology",
                    location: "Istanbul",
                    jobCount: 24,
                    employeeCount: "500+",
                    rating: "4.8",
                    description:
                        "A leading technology company specializing in artificial intelligence and machine learning.",
                    logo: "🚀",
                },
                {
                    id: 2,
                    name: "FinanceFlow",
                    industry: "Fintech",
                    location: "Ankara",
                    jobCount: 18,
                    employeeCount: "1000+",
                    rating: "4.6",
                    description:
                        "An innovative financial technology platform offering digital banking and fintech solutions.",
                    logo: "💎",
                },
            ],
        };
    },
};
</script>
