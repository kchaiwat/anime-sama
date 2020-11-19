<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.partials.head')
    </head>
    <body>
        @include('layouts.partials.nav')
        @include('layouts.partials.ads')

        @yield('content')

        @include('layouts.partials.footer')
    </body>
</html>
