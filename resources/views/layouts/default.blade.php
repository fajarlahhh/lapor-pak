<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <link rel="stylesheet" href="/css/app.css" />
    @livewireStyles
</head>
<body class="main">
    @yield('content')

    @livewireScripts
    <script src="/js/app.js"></script>
</body>
</html>
