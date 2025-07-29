<template>
    <section class="relative min-h-screen flex flex-col">
        <!-- Hero -->
        <div class="relative flex-1">
            <div class="absolute inset-0">
                <!-- ✅ Doğrudan public/images kullan -->
                <img :src="backgroundImage" class="w-full h-full object-cover"/>
                <div class="absolute inset-0 bg-gradient-to-br from-pink-600/80 via-rose-600/70 to-red-600/80"></div>
            </div>
            <div class="relative z-10 text-center text-white pt-32 pb-16">
                <h1 class="text-5xl font-bold mb-4">İletişim</h1>
                <p class="text-xl text-white/90">Bize her zaman ulaşabilirsiniz</p>
            </div>
        </div>

        <!-- İçerik -->
        <div class="relative bg-white py-16 px-4">
            <div class="max-w-3xl mx-auto">
                <form class="bg-gray-50 p-6 rounded-xl shadow-lg space-y-4">
                    <input type="text" placeholder="Adınız" class="w-full p-3 border rounded-lg">
                    <input type="email" placeholder="E-posta" class="w-full p-3 border rounded-lg">
                    <textarea placeholder="Mesajınız" class="w-full p-3 border rounded-lg"></textarea>
                    <button type="submit" class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded-lg">
                        Gönder
                    </button>
                </form>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            backgroundImage: '/images/contact-bg.jpg' // ✅ Public klasörü referansı
        }
    }
}
</script>
