// import { defineConfig } from 'vite';
// import laravel from 'laravel-vite-plugin';

// export default defineConfig({
//     plugins: [
//         laravel([
//             'resources/css/app.css',
//             'resources/js/app.js',
//             'resources/sass/app.scss', 'public/css',
//             ['resources/sass/main.scss', 'public/css']],
//             refresh: true,
//         ]),
//     ],
// });

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
 
export default defineConfig({
    plugins: [
        laravel([
            'resources/css/app.css',
            'resources/js/app.js',
            'resources/sass/app.scss',
            'resources/sass/main.scss',
            'public/css',
        ]),
    ],
});
