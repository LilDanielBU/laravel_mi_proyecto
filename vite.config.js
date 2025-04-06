import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/estiloCatalogo.css', // tu nuevo CSS
                'resources/js/scriptsCatalogo.js'   // tu JS personalizado
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
