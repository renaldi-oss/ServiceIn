import { defineConfig } from 'vite'
import laravel,{ refreshPaths } from 'laravel-vite-plugin'


export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/sass/app.scss', 'resources/js/app.js','resources/css/app.css'],
            refresh : [
                'app/Http/Livewire/**',
                'app/Forms/Components/**',
            ],
            // refresh: true,
        }),
        
    ],
})
