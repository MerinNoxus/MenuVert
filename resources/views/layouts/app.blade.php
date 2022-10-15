<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/feef5712cc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
 
    <title>@yield('titulo')</title>
    @vite(['resources/scss/app.scss','resources/css/app.css','resources/js/app.js'])
</head>

<body>

    <header>
        <x-nav />
    </header>
    <main>
        @yield('contenido')
       
    </main>
    <footer >
        <x-footer />
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
   
</body>

</html>