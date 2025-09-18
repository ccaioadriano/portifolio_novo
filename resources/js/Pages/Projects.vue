<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";

// Array de projetos (você pode mover isso para props ou API depois)
const projects = [
    {
        id: 1,
        title: "Transformação Digital - E-commerce",
        description:
            "Implementação completa de plataforma e-commerce para empresa do varejo, incluindo integração com ERP, gateway de pagamento e sistema de gestão de estoque.",
        technologies: ["Laravel", "Vue.js", "MySQL", "Stripe", "AWS"],
        results: "Aumento de 300% nas vendas online em 6 meses",
        image: "",
        category: "E-commerce",
    },
    {
        id: 2,
        title: "Sistema de Gestão Empresarial",
        description:
            "Desenvolvimento de ERP customizado para indústria, automatizando processos de produção, vendas e controle financeiro.",
        technologies: ["PHP", "React", "PostgreSQL", "Docker", "Redis"],
        results: "Redução de 40% no tempo de processos administrativos",
        image: "",
        category: "ERP",
    },
    {
        id: 3,
        title: "Migração para Cloud AWS",
        description:
            "Migração completa de infraestrutura on-premise para AWS, implementando alta disponibilidade e backup automatizado.",
        technologies: ["AWS", "Docker", "Kubernetes", "Terraform", "CI/CD"],
        results: "Redução de 60% nos custos de infraestrutura",
        image: "",
        category: "Cloud",
    },
    {
        id: 4,
        title: "App Mobile para Delivery",
        description:
            "Aplicativo mobile completo para delivery de restaurantes, com sistema de pedidos, pagamento e rastreamento em tempo real.",
        technologies: [
            "React Native",
            "Node.js",
            "MongoDB",
            "Socket.io",
            "Firebase",
        ],
        results: "Mais de 10.000 downloads no primeiro mês",
        image: "",
        category: "Mobile",
    },
    {
        id: 5,
        title: "Dashboard Analytics B2B",
        description:
            "Plataforma de analytics e relatórios para empresa de marketing digital, com visualização de dados em tempo real.",
        technologies: [
            "Vue.js",
            "Laravel",
            "Chart.js",
            "Elasticsearch",
            "Redis",
        ],
        results: "Melhoria de 50% na tomada de decisões estratégicas",
        image: "",
        category: "Analytics",
    },
    {
        id: 6,
        title: "Automação de Processos RPA",
        description:
            "Implementação de robôs para automação de processos repetitivos em departamento financeiro, incluindo conciliação bancária.",
        technologies: ["Python", "Selenium", "Pandas", "API REST", "Cron Jobs"],
        results: "Economia de 80 horas/mês em tarefas manuais",
        image: "",
        category: "Automação",
    },
];
</script>

<template>
    <AppLayout>
        <!-- HERO SECTION -->
        <section
            class="text-center py-16 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-lg mb-16"
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
        <section class="py-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div
                    v-for="project in projects"
                    :key="project.id"
                    class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300"
                >
                    <!-- Imagem do Projeto -->
                    <div
                        class="h-48 bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center"
                    >
                        <span class="text-white text-6xl">💻</span>
                        <!-- Substitua por: <img :src="project.image" :alt="project.title" class="w-full h-full object-cover"> -->
                    </div>

                    <!-- Conteúdo -->
                    <div class="p-6">
                        <!-- Categoria -->
                        <span
                            class="inline-block bg-indigo-100 text-indigo-800 text-xs px-3 py-1 rounded-full font-medium mb-3"
                        >
                            {{ project.category }}
                        </span>

                        <!-- Título -->
                        <h3 class="text-xl font-bold text-gray-900 mb-3">
                            {{ project.title }}
                        </h3>

                        <!-- Descrição -->
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            {{ project.description }}
                        </p>

                        <!-- Tecnologias -->
                        <div class="mb-4">
                            <h4
                                class="text-sm font-semibold text-gray-700 mb-2"
                            >
                                Tecnologias:
                            </h4>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    v-for="tech in project.technologies"
                                    :key="tech"
                                    class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded"
                                >
                                    {{ tech }}
                                </span>
                            </div>
                        </div>

                        <!-- Resultados -->
                        <div class="border-t pt-4">
                            <h4
                                class="text-sm font-semibold text-green-700 mb-1"
                            >
                                Resultado:
                            </h4>
                            <p class="text-green-600 text-sm font-medium">
                                {{ project.results }}
                            </p>
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
