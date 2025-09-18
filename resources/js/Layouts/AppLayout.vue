<template>
    <div class="min-h-screen flex flex-col bg-gray-50 text-gray-900 font-sans">
        <!-- NAVBAR -->
        <header class="bg-white shadow fixed top-0 left-0 right-0 z-50">
            <nav
                class="max-w-7xl mx-auto flex justify-between items-center px-4 sm:px-6 py-4"
            >
                <!-- Branding -->
                <Link
                    href="/"
                    class="text-xl sm:text-2xl font-bold text-indigo-600 hover:text-indigo-700 transition"
                >
                    Caio Adriano
                </Link>

                <!-- Menu Desktop (hidden no mobile) -->
                <ul
                    class="hidden md:flex gap-6 lg:gap-8 text-gray-700 font-medium"
                >
                    <li>
                        <Link class="hover:text-indigo-600 transition" href="/"
                            >Início</Link
                        >
                    </li>
                    <li>
                        <Link
                            class="hover:text-indigo-600 transition"
                            href="/sobre"
                            >Sobre</Link
                        >
                    </li>
                    <li>
                        <Link
                            class="hover:text-indigo-600 transition"
                            href="/projetos"
                            >Projetos</Link
                        >
                    </li>
                </ul>

                <!-- Botão Hamburger (só no mobile) -->
                <button
                    @click="mobileMenuOpen = !mobileMenuOpen"
                    class="md:hidden flex flex-col gap-1 p-2"
                    aria-label="Menu"
                >
                    <span
                        class="w-6 h-0.5 bg-gray-700 transition-all"
                        :class="{ 'rotate-45 translate-y-2': mobileMenuOpen }"
                    ></span>
                    <span
                        class="w-6 h-0.5 bg-gray-700 transition-all"
                        :class="{ 'opacity-0': mobileMenuOpen }"
                    ></span>
                    <span
                        class="w-6 h-0.5 bg-gray-700 transition-all"
                        :class="{ '-rotate-45 -translate-y-2': mobileMenuOpen }"
                    ></span>
                </button>
            </nav>

            <!-- Menu Mobile (dropdown) -->
            <div
                v-show="mobileMenuOpen"
                class="md:hidden bg-white border-t shadow-lg"
            >
                <ul
                    class="flex flex-col py-4 px-6 gap-4 text-gray-700 font-medium"
                >
                    <li>
                        <Link
                            @click="mobileMenuOpen = false"
                            class="block hover:text-indigo-600 transition py-2"
                            href="/"
                        >
                            Início
                        </Link>
                    </li>
                    <li>
                        <Link
                            @click="mobileMenuOpen = false"
                            class="block hover:text-indigo-600 transition py-2"
                            href="/sobre"
                        >
                            Sobre
                        </Link>
                    </li>
                    <li>
                        <Link
                            @click="mobileMenuOpen = false"
                            class="block hover:text-indigo-600 transition py-2"
                            href="/projetos"
                        >
                            Projetos
                        </Link>
                    </li>
                </ul>
            </div>
        </header>

        <!-- MAIN CONTENT -->
        <main class="flex-1 max-w-7xl mx-auto px-6 pt-28 pb-12">
            <slot />
        </main>

        <!-- FOOTER -->
        <footer class="bg-gray-900 text-gray-300 py-6 mt-auto">
            <div class="max-w-7xl mx-auto flex flex-col items-center gap-2">
                <p class="text-sm">
                    © 2025 Caio Adriano · Consultor de Soluções Tecnológicas
                </p>
                <div class="flex gap-4">
                    <a
                        href="https://linkedin.com/in/caio-adriano"
                        target="_blank"
                        class="hover:text-white transition"
                    >
                        💼 LinkedIn
                    </a>
                    <a
                        href="https://github.com/ccaioadriano"
                        target="_blank"
                        class="hover:text-white transition"
                    >
                        💻 GitHub
                    </a>
                    <a
                        href="mailto:caiobhadriano@gmail.com"
                        class="hover:text-white transition"
                    >
                        📩 E-mail
                    </a>
                </div>
            </div>
        </footer>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";

// Estado do menu mobile
const mobileMenuOpen = ref(false);
</script>
