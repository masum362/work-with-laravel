import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', // Correct path to your CSS
                'resources/js/app.js',  // Correct path to your JS
            ],
            refresh: true,
        }),
    ],
    
});