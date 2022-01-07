<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="{{ mix('css/app.css')}}" rel="stylesheet">

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/prompt_thai/index.css') }}">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                font-family: 'Prompt';
            }
        </style>
    </head>
    <body class="antialiased">
        <h1 class="text-danger">hello basic</h1>
        <div id="app"></div>
        <script src="{{ mix('js/app.js')}}"></script>
    </body>
</html>
