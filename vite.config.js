import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '$': 'jQuery'
        },
    },

    // configure the Vite dev server (Zero Tier IP)
    server: {
        host: '0.0.0.0',
        port: 5173,
        hmr: {
            host: '10.144.210.187',
        }
    },
});
