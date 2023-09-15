import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js","resources/js/splide.js"],
            refresh: true,
        }),
    ],
    server: {
        watch: {
            ignored: ["**/storage/**", "**/vendor/**"],
        },
    },
    resolve: {
        alias: {
            "@": path.resolve(__dirname, "./resources/js"),
            "@images": path.resolve(__dirname, "./resources/images"),
        },
    },
});
