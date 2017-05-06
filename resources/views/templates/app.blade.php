<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Blog</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:800,700,500,400">
        <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
        @if (Request::secure())
            <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
        @else
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @endif
    </head>
    <body>
        @yield('header')

        <div class="container">
            @yield('main')
        </div>
    </body>
</html>
