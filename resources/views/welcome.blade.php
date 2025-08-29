<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        
        @vite(['resources/js/app.js', 'resources/css/app.css'])
    </head>
    <body>
       <div id="app">
        <product-component/>
       </div>
    </body>
</html>
