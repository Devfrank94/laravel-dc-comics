<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel DC Comics</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>


        {{-- @include('partials.header') --}}

        <main class="my-5">
            @yield('content')
        </main>

        {{-- @include('partials.footer') --}}

    </body>
</html>
