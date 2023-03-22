import { defineConfig } from 'vite'
import laravel,{ refreshPaths } from 'laravel-vite-plugin'


export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/sass/app.scss', 'resources/js/app.js'],
            // input: ['resources/css/app.css', 'resources/js/app.js','resources/sass/app.scss'],
            refresh : [
                'app/Http/Livewire/**',
                'app/Forms/Components/**',
            ],
            // refresh: true,
        }),
        
    ],
})
