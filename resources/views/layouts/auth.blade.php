<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <link rel="stylesheet" href="/css/app.css" />
    @livewireStyles
</head>
<body class="login">
    <div class="container sm:px-10">
        @yield('content')
    </div>

    @livewireScripts
    <script src="/js/app.js"></script>
</body>
</html>
