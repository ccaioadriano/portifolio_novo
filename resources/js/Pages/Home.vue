<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { useForm } from "@inertiajs/vue3";
import { Link } from "@inertiajs/vue3";

const form = useForm({
    name: "",
    email: "",
    message: "",
});

// handler para enviar o formulário
function submit() {
    form.post("/contact");
}
</script>

<template>
    <AppLayout>
        <!-- HERO SECTION -->
        <section
            class="text-center py-20 px-5 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-lg"
        >
            <h1 class="text-4xl md:text-5xl font-bold mb-4 leading-16">
                Soluções Tecnológicas para Transformar seu negócio
            </h1>
            <p class="max-w-2xl mx-auto text-lg mb-6">
                Olá, meu nome é <span class="font-semibold">Caio Adriano</span>,
                consultor em soluções tecnologicas. Transformo desafios em
                oportunidades digitais, ajudando empresas a escalarem sua
                presença online e otimizarem processos.
            </p>
            <Link
                href="#contato"
                class="bg-white text-indigo-600 px-6 py-3 rounded-lg font-medium shadow hover:bg-gray-100 transition"
                as="button"
            >
                Agende uma reunião comigo
            </Link>
        </section>

        <!-- BENEFÍCIOS / SERVIÇOS -->
        <section class="py-16 text-center max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold mb-6">
                Como posso ajudar sua empresa
            </h2>
            <div class="grid md:grid-cols-3 gap-8 text-gray-700">
                <div class="p-6 bg-white shadow rounded-lg">
                    <h3 class="font-semibold mb-2">🚀 Transformação Digital</h3>
                    <p>
                        Implantação de soluções modernas para aumentar
                        sua produtividade.
                    </p>
                </div>
                <div class="p-6 bg-white shadow rounded-lg">
                    <h3 class="font-semibold mb-2">
                        🔒 Segurança & Confiabilidade
                    </h3>
                    <p>
                        Sistemas seguros e estáveis, garantindo confiança para o
                        negócio.
                    </p>
                </div>
                <div class="p-6 bg-white shadow rounded-lg">
                    <h3 class="font-semibold mb-2">
                        📊 Estratégia Tecnológica
                    </h3>
                    <p>
                        Consultoria personalizada para contruir soluções alinhadas com seus objetivos.
                    </p>
                </div>
            </div>
        </section>

        <!-- FORMULÁRIO DE CONTATO -->
        <section id="contato" class="py-20 bg-gray-100 rounded-lg">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-6">Entre em contato</h2>
                <p class="mb-8 text-gray-600">
                    Preencha o formulário abaixo para marcar uma reunião ou
                    solicitar uma proposta.
                </p>

                <form
                    @submit.prevent="submit"
                    class="bg-white shadow-lg rounded-lg p-8 text-left"
                >
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700"
                            >Nome</label
                        >
                        <input
                            v-model="form.name"
                            type="text"
                            name="name"
                            required
                            class="mt-1 w-full p-3 border rounded-md focus:ring-indigo-500 focus:border-indigo-500"
                        />
                        <span
                            v-if="form.errors.name"
                            class="text-red-500 text-sm"
                            >{{ form.errors.name }}</span
                        >
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700"
                            >Email</label
                        >
                        <input
                            v-model="form.email"
                            type="email"
                            name="email"
                            required
                            class="mt-1 w-full p-3 border rounded-md focus:ring-indigo-500 focus:border-indigo-500"
                        />
                        <span
                            v-if="form.errors.email"
                            class="text-red-500 text-sm"
                            >{{ form.errors.email }}</span
                        >
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700"
                            >Mensagem</label
                        >
                        <textarea
                            v-model="form.message"
                            rows="4"
                            required
                            name="message"
                            class="mt-1 w-full p-3 border rounded-md focus:ring-indigo-500 focus:border-indigo-500"
                        ></textarea>
                        <span
                            v-if="form.errors.message"
                            class="text-red-500 text-sm"
                            >{{ form.errors.message }}</span
                        >
                    </div>

                    <button
                        type="submit"
                        class="w-full bg-indigo-600 text-white py-3 rounded-md hover:bg-indigo-700 transition"
                    >
                        📅 Agendar Reunião
                    </button>
                </form>
            </div>
        </section>
    </AppLayout>
</template>
