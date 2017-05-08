<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Stefan Janssen - @yield('title')</title>
    </head>
    <body>
        @include('components.menu')

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>