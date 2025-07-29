<template>
    <div class="relative z-10 max-w-4xl mx-auto text-center px-4">
        <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 drop-shadow-2xl">
            {{ heroTitle }}
            <span class="block text-yellow-300 drop-shadow-lg">{{ heroHighlight }}</span>
        </h1>

        <input v-model="searchKeyword" type="text" placeholder="Pozisyon ara"
               class="px-4 py-2 rounded-lg text-black mt-4" />
        <p class="text-white mt-4">Arama: {{ searchKeyword }}</p>
    </div>
</template>

<script>
export default {
    data() {
        return {
            heroTitle: "Yeni Kariyer Fırsatlarını",
            heroHighlight: "Keşfet",
            searchKeyword: ""
        }
    }
}
</script>
