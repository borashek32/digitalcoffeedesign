<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Inter:regular&display=swap" rel="stylesheet" />
        <style>
            * {
                font-family: "Inter"
            }
        </style>
        <!-- Aside plugins styles -->
        <link href="{{ asset('css/colorbox.css') }}" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                @if(isset($slot))
                    {{ $slot }}
                @else
                    @yield('content')
                @endif
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        <script src="https://cdn.tiny.cloud/1/9wqo0frucj2lt7oll5gxiukpbasl97x4360r6cbcb554c7cu/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        @yield('scripts')

        <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>
