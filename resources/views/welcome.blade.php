<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <script src="{{ asset('js/main.js') }}"></script>
    </head>
    <body>
        <div id="app">
            <div>This is Container</div>
            <nav>
                <a href="/">Without Component</a>
                <a href="/1">With Component</a>
            </nav>
            <div>
                Without Component
            </div>
        </div>
    </body>
</html>
