<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="overflow-x-hidden">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Serif:ital,wght@1,700&display=swap" rel="stylesheet" >

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" href="/images/favicon.ico" sizes="32x32">
        <meta name="Description" content="I am a full-stack developer based in Melbourne, Victoria specializing in building (and occasionally designing) high-quality websites and applications. 🚀">

        <!-- Styles -->
        @inline('/css/app.css')
{{--        <link href="{{ mix('css/app.css') }}" rel="stylesheet">--}}
    </head>
    <body>
        <div id="home" x-data="{ sticky: false }">
            @yield('content')
        </div>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
{{--        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>--}}
    </body>
</html>
