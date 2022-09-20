import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/frontend/style.scss',
                'resources/js/frontend/theme.js',
                'resources/sass/errors.scss',
                'resources/js/errors.js'
            ],
            refresh: true,
        }),
        {
            name: 'blade',
            handleHotUpdate({ file, server }) {
                if (file.endsWith('.blade.php')) {
                    server.ws.send({
                        type: 'update',
                        path: '*',
                    });
                }
            },
        }
    ],
});
