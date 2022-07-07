import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel([
            'resources/assets/admin/plugins/fontawesome-free/css/all.min.css',
            'resources/assets/admin/plugins/select2/css/select2.css',
            'resources/assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.css',
            'resources/assets/admin/css/adminlte.min.css',

            'resources/assets/admin/plugins/jquery/jquery.min.js',
            'resources/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js',
            'resources/assets/admin/plugins/select2/js/select2.full.js',
            'resources/assets/admin/plugins/bs-custom-file-input/bs-custom-file-input.js',
            'resources/assets/admin/js/adminlte.min.js',
            'resources/assets/admin/js/demo.js',

            'resources/assets/front/lib/owlcarousel/assets/owl.carousel.min.css',
            'resources/assets/front/lib/lightbox/css/lightbox.min.css',
            'resources/assets/front/css/style.min.css',

            'resources/assets/front/mail/jqBootstrapValidation.min.js',
            'resources/assets/front/mail/contact.js',
            'resources/assets/front/js/main.js',
        ]),
    ],
});
