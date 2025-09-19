<template>
    <div class="min-h-screen flex flex-col bg-gray-50 text-gray-900 font-sans">
        <!-- NAVBAR -->
        <header class="shadow-md">
            <Disclosure
                as="nav"
                class="relative backdrop-blur-md bg-gradient-to-r"
                v-slot="{ open }"
            >
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div
                        class="relative flex h-16 items-center justify-between"
                    >
                        <!-- LOGO + LINKS -->
                        <div
                            class="absolute sm:relative inset-y-0 left-0 flex flex-1 items-center justify-center sm:items-stretch sm:justify-start"
                        >
                            <Link class="flex items-center gap-2" as="button" href="/">
                                <!-- Ícone ou inicial -->
                                <div
                                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-bold shadow-md"
                                >
                                    CA
                                </div>

                                <!-- Nome -->
                                <span
                                    class="ml-2 text-xl font-extrabold tracking-tight text-purple-600"
                                >
                                    Caio Adriano
                                </span>
                            </Link>
                        </div>

                        <!-- ÍCONES DIREITA -->
                        <div
                            class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0"
                        >
                            <DisclosureButton
                                class="relative inline-flex items-center justify-center rounded-md p-2 transition sm:hidden"
                            >
                                <span class="absolute -inset-0.5" />
                                <span class="sr-only">Open main menu</span>
                                <Bars3Icon
                                    v-if="!open"
                                    class="block size-6"
                                    aria-hidden="true"
                                />
                                <XMarkIcon
                                    v-else
                                    class="block size-6"
                                    aria-hidden="true"
                                />
                            </DisclosureButton>

                            <div class="hidden sm:ml-6 sm:block">
                                <div class="flex space-x-2 md:space-x-4">
                                    <Link
                                        v-for="item in navigation"
                                        :key="item.name"
                                        :href="item.href"
                                        :class="[
                                            currentPath === item.href
                                                ? 'bg-indigo-600 text-white'
                                                : 'text-gray-900 hover:bg-indigo-500/20',
                                            'px-3 py-2 rounded-md text-sm font-medium',
                                        ]"
                                        :aria-current="
                                            item.current ? 'page' : undefined
                                        "
                                    >
                                        {{ item.name }}
                                    </Link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MOBILE MENU -->
                <DisclosurePanel class="sm:hidden">
                    <div class="space-y-1 px-2 pt-2 pb-3">
                        <DisclosureButton
                            v-for="item in navigation"
                            :key="item.name"
                            as="a"
                            :href="item.href"
                            :class="[
                                currentPath == item.href
                                    ? 'bg-indigo-600 text-white'
                                    : 'text-gray-900 hover:bg-indigo-500/20 transition',
                                'block rounded-md px-3 py-2 text-base font-medium transition',
                            ]"
                            :aria-current="item.current ? 'page' : undefined"
                        >
                            {{ item.name }}
                        </DisclosureButton>
                    </div>
                </DisclosurePanel>
            </Disclosure>
        </header>

        <!-- MAIN CONTENT -->
        <main class="flex-1 max-w-7xl mx-auto px-6 pt-28 pb-12">
            <slot />
        </main>

        <!-- FOOTER -->
        <footer class="bg-gray-900 text-gray-300 py-6 mt-auto">
            <div class="max-w-7xl mx-auto flex flex-col items-center gap-2">
                <p class="text-sm">
                    © {{ new Date().getFullYear() }} Caio Adriano · Consultor de Soluções Tecnológicas
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
import { Disclosure, DisclosureButton, DisclosurePanel } from "@headlessui/vue";
import { Bars3Icon, XMarkIcon } from "@heroicons/vue/24/outline";
import { Link } from "@inertiajs/vue3";

const navigation = [
    {
        name: "Início",
        href: "/",
    },
    { name: "Sobre", href: "/sobre" },
    { name: "Projetos", href: "/projetos" },
];

const currentPath = window.location.pathname;
</script>
