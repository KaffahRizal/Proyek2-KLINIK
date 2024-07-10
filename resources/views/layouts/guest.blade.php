<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link
        rel="icon"
        href="{{asset('kaiadmin')}}/assets/img/kaiadmin/favicon.ico"
        type="image/x-icon"
        />
        <title>SENDIRI</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="{{ asset('loginform') }}/assets/css/style.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    {{-- <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div>
                <a href="/">
                    <img src="{{ asset('covido') }}/assets/images/logoSendiri.png" alt="#" width="200"/>
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg"> --}}
                {{ $slot }}
            {{-- </div>
        </div>
    </body> --}}
    <script src="{{ asset('login') }}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('login') }}/assets/js/popper.js"></script>
    <script src="{{ asset('login') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('login') }}/assets/js/main.js"></script>
</html>
