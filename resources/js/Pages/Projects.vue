<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link } from "@inertiajs/vue3";
import {
    ArrowTopRightOnSquareIcon,
    CodeBracketIcon,
} from "@heroicons/vue/24/outline";

const props = defineProps({ projects: Array });

console.log("Todos os projetos:", props.projects);
</script>

<template>
    <AppLayout>
        <!-- HERO SECTION -->
        <section
            class="text-center py-16 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-lg mb-16 px-5"
        >
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Meus Projetos 🚀
            </h1>
            <p class="max-w-3xl mx-auto text-lg mb-6">
                Conheça alguns dos projetos que desenvolvi para empresas de
                diversos segmentos. Cada solução foi pensada para gerar
                <span class="font-semibold">resultados reais</span> e
                <span class="font-semibold">impacto positivo</span> nos
                negócios.
            </p>
        </section>

        <!-- GRID DE PROJETOS -->
        <section class="py-12 bg-gray-50">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                <div
                    v-for="project in props.projects"
                    :key="project.id"
                    class="group bg-white rounded-2xl shadow-md hover:shadow-2xl transition-all duration-300 overflow-hidden flex flex-col"
                >
                    <!-- Capa / Imagem do Projeto -->
                    <div class="relative h-48 w-full overflow-hidden">
                        <img
                            v-if="project.cover_image"
                            :src="project.cover_image"
                            :alt="project.title"
                            class="w-full h-full object-cover"
                        />
                        <div
                            v-else
                            class="h-full w-full flex items-center justify-center bg-gradient-to-br from-indigo-500 to-purple-600"
                        >
                            <span class="text-white text-6xl">💻</span>
                        </div>
                    </div>

                    <!-- Conteúdo -->
                    <div class="p-6 flex flex-col flex-1">
                        <!-- Título -->
                        <h3
                            class="text-xl font-bold text-gray-900 mb-2"
                        >
                            {{ project.title }}
                        </h3>

                        <!-- Descrição curta -->
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            {{ project.short_description }}
                        </p>

                        <!-- Tecnologias -->
                        <div v-if="project.stacks?.length" class="mb-6">
                            <h4
                                class="text-sm font-semibold text-gray-700 mb-2"
                            >
                                Tecnologias:
                            </h4>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    v-for="tech in project.stacks"
                                    :key="tech.id"
                                    class="inline-block bg-indigo-50 text-indigo-700 text-xs px-3 py-1 rounded-full font-medium hover:bg-indigo-100 transition"
                                >
                                    {{ tech.title }}
                                </span>
                            </div>
                        </div>

                        <!-- Links -->
                        <div class="mt-auto flex gap-3">
                            <a
                                v-if="project.project_url"
                                :href="project.project_url"
                                target="_blank"
                                rel="noopener"
                                class="flex-1 inline-flex items-center justify-center gap-2 px-4 py-2 rounded-lg bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-sm font-medium shadow hover:from-indigo-700 hover:to-purple-700 hover:shadow-lg transition"
                            >
                                🔗 Ver Projeto
                            </a>
                            <a
                                v-if="project.repository_url"
                                :href="project.repository_url"
                                target="_blank"
                                rel="noopener"
                                class="flex-1 inline-flex items-center justify-center gap-2 px-4 py-2 rounded-lg border border-gray-300 text-gray-700 text-sm font-medium bg-white hover:bg-gray-50 hover:border-gray-400 hover:text-gray-900 shadow-sm transition"
                            >
                                📂 Repositório
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA SECTION -->
        <section class="text-center py-16 bg-gray-100 rounded-lg mt-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">
                Gostou dos projetos?
            </h2>
            <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                Estes são apenas alguns exemplos do que posso fazer pela sua
                empresa. Vamos conversar sobre como posso ajudar você a alcançar
                seus objetivos?
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a
                    href="/contact"
                    class="bg-indigo-600 text-white px-8 py-3 rounded-lg font-medium hover:bg-indigo-700 transition"
                >
                    💬 Vamos conversar
                </a>
                <a
                    href="mailto:caiobhadriano@gmail.com"
                    class="bg-white text-indigo-600 border-2 border-indigo-600 px-8 py-3 rounded-lg font-medium hover:bg-indigo-50 transition"
                >
                    📧 Enviar e-mail
                </a>
            </div>
        </section>
    </AppLayout>
</template>
