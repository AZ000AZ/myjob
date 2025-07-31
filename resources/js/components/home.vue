<template>
    <section class="relative min-h-screen flex flex-col">
        <!-- Hero -->
        <div class="relative flex-1">
            <div class="absolute inset-0">
                <img :src="backgroundImage" class="w-full h-full object-cover"/>
                <div class="absolute inset-0 bg-gradient-to-br from-orange-600/80 via-red-600/70 to-pink-600/80"></div>
            </div>
            <div class="relative z-10 text-center text-white pt-32 pb-16">
                <h1 class="text-5xl font-bold mb-4">Explore Job Listings</h1>
                <p class="text-xl text-white/90">Find the perfect opportunity among thousands of listings</p>
            </div>
        </div>

        <!-- Content -->
        <div class="relative bg-white py-16 px-4">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">
                <div v-for="job in jobs" :key="job.title"
                     class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition p-6 border border-gray-100">
                    <h2 class="text-xl font-bold text-orange-600 mb-2">{{ job.title }}</h2>
                    <p class="text-gray-500">{{ job.company }}</p>
                    <p class="text-sm text-gray-400 mt-2">{{ job.location }}</p>
                    <button class="mt-4 bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-lg">
                        Details
                    </button>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            backgroundImage: '/images/jobs-bg.jpg',
            jobs: [
                { title: 'Frontend Developer', company: 'TechCorp', location: 'Istanbul' },
                { title: 'Backend Developer', company: 'CodeWorks', location: 'Ankara' },
                { title: 'UI Designer', company: 'DesignPro', location: 'Izmir' }
            ]
        }
    }
}
</script>
