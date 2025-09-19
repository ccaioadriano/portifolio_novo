<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";

import { useForm, Link,router } from "@inertiajs/vue3";

const form = useForm({
    name: "",
    email: "",
    message: "",
});

const whatsappNumber = "5531994409981";

// função de validação
async function validate() {
    return new Promise((resolve, reject) => {
        router.post("/validate-contact", form, {
            preserveScroll: true,
            onSuccess: () => {
                console.log("✅ Validação passou!");
                resolve(true);
            },
            onError: (errors) => {
                form.errors = errors
                resolve(false);
            },
        });
    });
}

// handler para enviar para WhatsApp
async function submit() {
    const isValid = await validate();

    if (!isValid) {
        console.log("Formulário inválido!");
        return;
    }

    const text = `
*Novo Contato pelo Site*

- Nome: ${form.name}
- Email: ${form.email}

Mensagem:
${form.message}
`;

    const encodedMessage = encodeURIComponent(text.trim());
    window.open(
        `https://wa.me/${whatsappNumber}?text=${encodedMessage}`,
        "_blank"
    );

    form.reset();
}
</script>

<template>
    <AppLayout>
        <!-- HERO SECTION -->
        <section
            class="text-center py-20 px-5 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-lg"
        >
            <h1 class="text-4xl md:text-5xl font-bold mb-4 leading-16">
                Soluções Tecnológicas para transformar seu negócio
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
                prefetch
            >
                Faça já seu orçamento
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
                        Implantação de soluções modernas para aumentar sua
                        produtividade.
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
                        Consultoria personalizada para contruir soluções
                        alinhadas com seus objetivos.
                    </p>
                </div>
            </div>
        </section>

        <!-- FORMULÁRIO DE CONTATO -->
        <section id="contato" class="py-20 bg-gray-50">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-extrabold mb-4 text-gray-900">
                    🚀 Entre em contato
                </h2>
                <p class="mb-10 text-gray-600 max-w-lg mx-auto">
                    Preencha o formulário abaixo para marcar uma reunião ou
                    solicitar uma proposta personalizada.
                </p>

                <form
                    @submit.prevent="submit"
                    class="bg-white shadow-xl rounded-2xl p-8 md:p-10 text-left border border-gray-100"
                >
                    <!-- Nome -->
                    <div class="mb-6">
                        <label
                            for="name"
                            class="block text-sm font-semibold text-gray-700 mb-2"
                        >
                            Nome
                        </label>
                        <input
                            v-model="form.name"
                            id="name"
                            type="text"
                            placeholder="Digite seu nome completo"
                            class="w-full rounded-lg border border-gray-300 bg-gray-50 px-4 py-3 text-gray-800 shadow-sm placeholder-gray-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition"
                        />
                        <span
                            v-if="form.errors.name"
                            class="text-red-500 text-sm mt-1 block"
                        >
                            {{ form.errors.name }}
                        </span>
                    </div>

                    <!-- Email -->
                    <div class="mb-6">
                        <label
                            for="email"
                            class="block text-sm font-semibold text-gray-700 mb-2"
                        >
                            Email
                        </label>
                        <input
                            v-model="form.email"
                            id="email"
                            type="email"
                            placeholder="voce@email.com"
                            class="w-full rounded-lg border border-gray-300 bg-gray-50 px-4 py-3 text-gray-800 shadow-sm placeholder-gray-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition"
                        />
                        <span
                            v-if="form.errors.email"
                            class="text-red-500 text-sm mt-1 block"
                        >
                            {{ form.errors.email }}
                        </span>
                    </div>

                    <!-- Mensagem -->
                    <div class="mb-6">
                        <label
                            for="message"
                            class="block text-sm font-semibold text-gray-700 mb-2"
                        >
                            Mensagem
                        </label>
                        <textarea
                            v-model="form.message"
                            id="message"
                            rows="4"
                            placeholder="Escreva aqui sua mensagem..."
                            class="w-full rounded-lg border border-gray-300 bg-gray-50 px-4 py-3 text-gray-800 shadow-sm placeholder-gray-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition"
                        ></textarea>
                        <span
                            v-if="form.errors.message"
                            class="text-red-500 text-sm mt-1 block"
                        >
                            {{ form.errors.message }}
                        </span>
                    </div>

                    <!-- Botão -->
                    <button
                        type="submit"
                        class="w-full flex items-center justify-center gap-2 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold py-3 px-6 rounded-lg hover:from-indigo-700 hover:to-purple-700 shadow-md hover:shadow-lg transition-all duration-200"
                        :disabled="form.processing"
                    >
                        Enviar mensagem
                    </button>
                </form>
            </div>
        </section>
    </AppLayout>
</template>
