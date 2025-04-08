<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        @vite(['resources/css/app.css'])

    </head>
   <body>
           <h1 class="head">Virat babu aap welcome page pr h </h1>
           <hr>
           <x-hero/>
           <x-internal.footer tittle="Dynamic ho gye na Virat babu "/>
   </body>
</html>
