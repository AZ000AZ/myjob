<template>
    <section class="py-20 relative">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-orange-100/50 via-red-50/50 to-pink-100/50 backdrop-blur-sm"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Title -->
            <div class="text-center mb-16">
                <div class="bg-white/20 backdrop-blur-lg rounded-2xl p-8 border border-white/30 shadow-2xl">
                    <h2 class="text-4xl font-bold text-gray-800 mb-4 drop-shadow-lg">
                        Popüler Kategoriler
                    </h2>
                    <p class="text-gray-700 text-xl drop-shadow-sm">
                        Size uygun kategoriyi seçin ve hayalinizdeki işi bulun
                    </p>
                </div>
            </div>

            <!-- Categories -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div
                    v-for="(category, index) in categories"
                    :key="index"
                    class="group cursor-pointer transform hover:scale-105 transition-all duration-500"
                >
                    <div
                        class="bg-white/15 backdrop-blur-lg rounded-3xl p-8 shadow-2xl hover:shadow-3xl transition-all duration-500 border border-white/20 hover:border-white/40 hover:bg-white/25"
                    >
                        <div class="text-center">
                            <!-- Icon -->
                            <div
                                class="backdrop-blur-sm rounded-2xl p-6 mb-6 transition-all duration-300 shadow-xl border border-white/30 flex items-center justify-center"
                                :class="category.color"
                            >
                                <i :class="category.icon" class="text-3xl text-white drop-shadow-lg"></i>
                            </div>

                            <!-- Name -->
                            <h3 class="text-gray-800 font-bold text-lg mb-2 drop-shadow-sm">
                                {{ category.name }}
                            </h3>

                            <!-- Count -->
                            <p class="text-gray-600 text-sm font-medium drop-shadow-sm">
                                {{ category.count }} ilan
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "CategoriesSection",
    data() {
        return {
            categories: [
                { name: "Yazılım & IT", icon: "fas fa-code", count: "3,245", color: "bg-gradient-to-br from-blue-500/80 to-cyan-500/80" },
                { name: "Tasarım & Kreatif", icon: "fas fa-palette", count: "1,876", color: "bg-gradient-to-br from-purple-500/80 to-pink-500/80" },
                { name: "Pazarlama & Satış", icon: "fas fa-chart-bar", count: "2,134", color: "bg-gradient-to-br from-green-500/80 to-emerald-500/80" },
                { name: "İnsan Kaynakları", icon: "fas fa-users", count: "987", color: "bg-gradient-to-br from-orange-500/80 to-red-500/80" },
                { name: "Mühendislik", icon: "fas fa-wrench", count: "1,543", color: "bg-gradient-to-br from-gray-500/80 to-slate-600/80" },
                { name: "Sağlık", icon: "fas fa-heart", count: "876", color: "bg-gradient-to-br from-red-500/80 to-rose-500/80" },
                { name: "Lojistik", icon: "fas fa-truck", count: "654", color: "bg-gradient-to-br from-indigo-500/80 to-blue-500/80" },
                { name: "Eğitim", icon: "fas fa-graduation-cap", count: "432", color: "bg-gradient-to-br from-yellow-500/80 to-orange-500/80" },
            ]
        }
    }
}
</script>

<style scoped>
/* Hover efektini yumuşatmak için */
.group:hover .group-hover\:scale-110 {
    transform: scale(1.1);
}
</style>
