<!DOCTYPE html>
<html lang="ru">

<head>
    <title>@yield('title')</title>
    @include('layout.head')
</head>

<body>
    @include('layout.navbar')
    @yield('skeleton-content')
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    @yield('customjs')
</body>

</html>