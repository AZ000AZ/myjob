<template>
    <section class="py-20">
        <h2 class="text-4xl font-bold text-center mb-8">Öne Çıkan İlanlar</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div v-for="job in jobs" :key="job.id" class="bg-white/15 p-6 rounded-2xl shadow-lg">
                <h3 class="text-xl font-bold">{{ job.title }}</h3>
                <p>{{ job.company }}</p>
                <p>{{ job.location }} - {{ job.type }}</p>
                <button class="bg-orange-500 text-white py-2 px-4 mt-4 rounded-lg">Başvur</button>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            jobs: [
                { id: 1, title: 'UX/UI Designer', company: 'DesignStudio', location: 'Ankara', type: 'Uzaktan' },
                { id: 2, title: 'Marketing Specialist', company: 'MarketPro', location: 'İzmir', type: 'Tam Zamanlı' }
            ]
        }
    }
}
</script>
