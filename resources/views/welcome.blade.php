<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/        font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV        +EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW        27+ddLVCN+OMzQ==" crossorigin="anonymous"         referrerpolicy="no-referrer" />
        @vite(['resources/js/app.js', 'resources/css/app.css'])
    </head>
    <body>
       <div id="app">
        <product-component/>
       </div>
    </body>
</html>
