<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";

const props = defineProps({
    about: Object,
});
</script>

<template>
    <AppLayout>
        <!-- SECTION SOBRE -->
        <section class="py-20 max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <!-- FOTO PROFISSIONAL -->
                <div class="flex justify-center">
                    <img
                        v-if="about.profile_picture"
                        :src="about.profile_picture"
                        :alt="`Foto de ${about.name}`"
                        class="w-40 sm:w-56 md:w-72 lg:w-80 rounded-xl shadow-lg border-4 border-indigo-100 object-cover"
                    />
                </div>

                <!-- TEXTO SOBRE -->
                <div class="flex flex-col text-center md:text-left">
                    <h1
                        class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-4"
                    >
                        Sobre <span class="text-indigo-600">mim</span>
                    </h1>

                    <div
                        class="about-content prose prose-lg text-gray-700"
                        v-html="about.bio"
                    ></div>

                    <!-- CTA -->
                    <div>
                        <a
                            href="/#contato"
                            class="inline-block bg-gradient-to-br from-indigo-500 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white px-6 py-3 rounded-lg shadow-md transition text-base sm:text-lg font-medium"
                        >
                            Entrar em contato
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </AppLayout>
</template>
