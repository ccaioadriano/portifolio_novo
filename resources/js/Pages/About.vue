<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
</script>

<template>
    <AppLayout>
        <!-- SECTION SOBRE -->
        <section class="py-20 max-w-6xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- FOTO PROFISSIONAL -->
                <div class="flex justify-center">
                    <img
                        src="../../../public/images/perfil-formatura.png"
                        alt="Foto de Caio Adriano - Consultor em Soluções Tecnológicas"
                        class="rounded-xl shadow-lg max-w-sm border-4 border-indigo-100"
                    />
                </div>

                <!-- TEXTO SOBRE -->
                <div>
                    <h1 class="text-4xl font-bold text-gray-900 mb-4">
                        Sobre <span class="text-indigo-600">mim</span>
                    </h1>
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">
                        Sou <span class="font-semibold">Caio Adriano</span>,
                        consultor em soluções tecnológicas ajudando negocios a transformarem sua presença digital inovação e transformação digital.
                    </p>
                    <p class="text-gray-700 leading-relaxed mb-6">
                        Minha missão é ajudar empresas a
                        <span class="font-semibold"
                            >aumentarem sua presença digital</span
                        >, otimizarem processos e escalarem resultados com
                        tecnologia inteligente. Ao longo da minha trajetória, já
                        apoiei negócios a integrarem sistemas, adotarem
                        ferramentas modernas e estruturarem operações digitais
                        de forma escalável e segura.
                    </p>
                    <p class="text-gray-700 leading-relaxed mb-8">
                        Acredito que tecnologia não é apenas uma ferramenta, mas
                        a ponte que conecta empresas às suas melhores
                        oportunidades de crescimento.
                    </p>

                    <!-- CTA -->
                    <div>
                        <a
                            href="/contact"
                            class="inline-block bg-gradient-to-br from-indigo-500 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white px-6 py-3 rounded-lg shadow hover:bg-indigo-700 transition text-lg font-medium"
                        >
                            📅 Agende uma reunião comigo
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </AppLayout>
</template>
