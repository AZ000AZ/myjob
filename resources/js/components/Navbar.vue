<template>
    <header class="absolute top-0 left-0 right-0 z-50 bg-white/10 backdrop-blur-lg border-b border-white/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">

                <!-- Logo -->
                <div class="bg-white text-orange-600 px-6 py-3 rounded-xl font-bold text-2xl shadow-lg">
                    JobFind
                </div>

                <!-- Nav Links -->
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="/" class="text-white hover:text-yellow-300 transition-colors">Home</a>
                    <a href="/jobs" class="text-white hover:text-yellow-300 transition-colors">Job Listings</a>
                    <a href="/companies" class="text-white hover:text-yellow-300 transition-colors">Companies & Organizations</a>
                    <a href="/about-contact" class="text-white hover:text-yellow-300">About & Contact</a>


                </nav>

                <!-- Buttons -->
                <div class="flex items-center space-x-4">
                    <button class="text-white hover:text-yellow-300 transition-colors">Login</button>
                    <button class="bg-white text-orange-600 px-4 py-2 rounded-lg hover:bg-yellow-200 transition-colors">
                        Sign Up
                    </button>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
export default {
    name: "Navbar"
}
</script>
