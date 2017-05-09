<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @include('resources.head')

        <title>Stefan Janssen - @yield('title')</title>
    </head>
    <body>
        @include('component.menu')

        <main class="container {{ Route::currentRouteName() == "welcome" ? "container--welcome" : "" }}">

            {{ Route::currentRouteName() }}
            @yield('content')
        </main>
    </body>
</html>
