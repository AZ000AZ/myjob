<template>
    <section class="relative min-h-screen flex flex-col">
        <!-- Hero -->
        <div class="absolute inset-0">
            <img :src="backgroundImage" class="w-full h-full object-cover"/>
            <div class="absolute inset-0 bg-gradient-to-br from-green-600/80 via-emerald-600/70 to-teal-600/80"></div>
        </div>
        <div class="relative z-10 text-center text-white pt-32 pb-16">
            <h1 class="text-5xl font-bold mb-4">Kariyer Rehberi</h1>
            <p class="text-xl text-white/90">İpuçları, tavsiyeler ve başarı hikayeleri</p>
        </div>

        <!-- İçerik -->
        <div class="relative bg-white py-16 px-4">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
                <div v-for="article in articles" :key="article.title"
                     class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition p-6 border border-gray-100">
                    <h2 class="text-xl font-bold text-green-600 mb-2">{{ article.title }}</h2>
                    <p class="text-gray-600 mb-4">{{ article.summary }}</p>
                    <button class="text-green-500 hover:underline">Devamını Oku</button>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            backgroundImage: '/images/guide-bg.jpg', // ✅ Public içinden çağırıyoruz
            articles: [
                { title: 'CV Nasıl Hazırlanır?', summary: 'İş başvurularında etkili bir CV hazırlamak için ipuçları...' },
                { title: 'Mülakat Teknikleri', summary: 'İş görüşmelerinde başarılı olmak için dikkat edilmesi gerekenler...' }
            ]
        }
    }
}
</script>
