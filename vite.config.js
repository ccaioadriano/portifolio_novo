import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
        vue(),
        tailwindcss(),
    ],
    build: {
        rollupOptions: {
            output: {
                manualChunks: {
                    // Vendor libraries (Vue, Inertia, etc.)
                    vendor: [
                        "vue",
                        "@inertiajs/vue3",
                        "@headlessui/vue",
                        "@heroicons/vue",
                    ],
                    // Páginas principais do portfólio
                    portfolio: [
                        "./resources/js/Pages/Home.vue",
                        "./resources/js/Pages/About.vue",
                        "./resources/js/Pages/Projects.vue",
                    ],
                    // Componentes compartilhados
                    components: ["./resources/js/Layouts/AppLayout.vue"],
                },
            },
        },
    },
    resolve: {
        alias: {
            "@": "/resources/js",
        },
    },
});
