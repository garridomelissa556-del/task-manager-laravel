<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link
            href="https://fonts.bunny.net/css?family=space-grotesk:500,600,700|inter:400,500,600|jetbrains-mono:500,600&display=swap"
            rel="stylesheet"
        />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="font-sans antialiased">
        <div class="min-h-screen bg-paper">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white border-b border-line">
                    <div class="max-w-6xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <!-- SweetAlert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- Confirmación global para formularios -->
        <!-- Confirmación global para formularios -->
<script>
    document.addEventListener('submit', function (event) {
        const form = event.target.closest('form[data-confirm]');

        if (!form || form.dataset.sending === 'true') {
            return;
        }

        event.preventDefault();

        const title =
            form.dataset.confirmTitle || '¿Confirmar acción?';

        const text =
            form.dataset.confirmText ||
            'Confirma que deseas continuar.';

        const confirmText =
            form.dataset.confirmButton || 'Sí, continuar';

        // Respaldo por si SweetAlert2 no carga
        if (typeof Swal === 'undefined') {
            if (window.confirm(text)) {
                form.dataset.sending = 'true';
                form.submit();
            }

            return;
        }

        Swal.fire({
            title: title,
            text: text,
            icon: 'warning',

            showCancelButton: true,
            reverseButtons: true,
            focusCancel: true,

            allowOutsideClick: false,
            allowEscapeKey: true,

            confirmButtonText: confirmText,
            cancelButtonText: 'Cancelar',

            // Colores de los botones
            confirmButtonColor: '#ef4444',
            cancelButtonColor: '#6b7280',

            // IMPORTANTE: permite que SweetAlert dé
            // tamaño, separación y diseño a los botones
            buttonsStyling: true,

            customClass: {
                popup: 'taskmaster-modal',
                title: 'taskmaster-modal-title',
                htmlContainer: 'taskmaster-modal-text'
            }
        }).then(function (result) {
            if (result.isConfirmed) {
                form.dataset.sending = 'true';
                form.submit();
            }
        });
    });
</script>
    </body>
</html>