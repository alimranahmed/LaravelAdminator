<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon-->
    <link rel="shortcut icon" type="image/png" href="{{asset('images/logo.png')}}"/>

    <title>{{ config('app.name', 'Laravel Adminator') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/adminator.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/adminator.css') }}" rel="stylesheet">
    @stack('css')
</head>
<body class="app">
<div>
    <div id='loader'>
        <div class="spinner"></div>
    </div>

    <script>
        window.addEventListener('load', () => {
            const loader = document.getElementById('loader');
            setTimeout(() => {
                loader.classList.add('fadeOut');
            }, 300);
        });
    </script>
    <div>
        @include('backend.layouts.include.leftbar')

        <div class="page-container" id="app">
            @include('backend.layouts.include.topbar')

            <main class='main-content bgc-grey-100'>
                <div id='mainContent'>
                    <div class="full-container">
                        <div class="container-fluid content-container">
                            @yield('content')
                        </div>
                        <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
                            <span>Copyright © {{now()->year}}, All rights reserved.</span>
                        </footer>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Scripts -->
    @yield('route')
    @stack('js')
</div>
</body>
</html>
