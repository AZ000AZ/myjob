<template>
    <section
        class="relative min-h-screen pt-28 pb-16 px-6 bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900"
    >
        <div class="w-full max-w-6xl mx-auto">
            <!-- Title -->
            <div class="text-center mb-12">
                <h2
                    class="text-4xl font-bold bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent mb-4"
                >
                    About Us & Contact
                </h2>
                <p class="text-gray-400 text-lg">
                    Get to know us better and reach out anytime
                </p>
            </div>

            <!-- Content -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- About -->
                <div
                    class="bg-white/10 backdrop-blur-md rounded-2xl p-8 border border-white/20 hover:bg-white/20 transition-all duration-300 text-center"
                >
                    <h3
                        class="text-2xl font-bold text-cyan-300 mb-4 border-b border-white/20 pb-2"
                    >
                        About Us
                    </h3>
                    <p class="text-gray-300 leading-relaxed">
                       مع تحياتي للمهندس م الحسن
                    </p>
                </div>

                <!-- Contact -->
                <div
                    class="bg-white/10 backdrop-blur-md rounded-2xl p-8 border border-white/20 hover:bg-white/20 transition-all duration-300"
                >
                    <h3
                        class="text-2xl font-bold text-cyan-300 mb-4 border-b border-white/20 pb-2 text-center"
                    >
                        Contact
                    </h3>
                    <form class="space-y-4">
                        <input
                            type="text"
                            placeholder="Your Name"
                            class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-xl text-white placeholder-gray-400 focus:ring-2 focus:ring-purple-500"
                        />
                        <input
                            type="email"
                            placeholder="Your Email"
                            class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-xl text-white placeholder-gray-400 focus:ring-2 focus:ring-purple-500"
                        />
                        <textarea
                            placeholder="Your Message"
                            rows="4"
                            class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-xl text-white placeholder-gray-400 focus:ring-2 focus:ring-purple-500"
                        ></textarea>
                        <button
                            type="submit"
                            class="w-full bg-gradient-to-r from-cyan-500 to-purple-500 hover:from-cyan-600 hover:to-purple-600 text-white px-6 py-3 rounded-xl shadow-lg shadow-purple-500/25 hover:scale-[1.02] transition-transform"
                        >
                            Send
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "AboutContactPage",
};
</script>
