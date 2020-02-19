<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-200">

<div class="hidden lg:block text-flat2 lg:text-xl lg:tracking-widest lg:mt-8 lg:flex lg:align-middle lg:justify-around  lg:mx-40">
        <a href="/" class="text-blue-800 hover:text-red-600 ">Home</a>
        <a href="/admin" class="text-blue-800 hover:text-red-600 ">Admin</a>
        <a href="#" class="text-blue-800 hover:text-red-600 ">Team</a>
        <a href="#" class="text-blue-800 hover:text-red-600 ">Contact</a>
        </div>
  
    <main class="">
      @yield('content')
    </main>

</body>
<script>
    @yield('js')
</script>
</html>
