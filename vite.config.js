import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/tinymce/js/tinymce/tinymce.min.js',
            ],
            refresh: true,
        }),
    ],
    build: {
        rollupOptions: {
          output: {
            assetFileNames: (assetInfo) => {
              if (assetInfo.name === 'tinymce.js') {
                return 'js/tinymce/[name][extname]';
              }
              // Return default pattern for other assets
              return 'assets/[name]-[hash][extname]';
            },
          },
        },
      },
});
