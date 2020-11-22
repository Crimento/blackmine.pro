<!DOCTYPE html>
<html lang="ru">

<head>
    <title>@yield('title')</title>
    @include('layout.head')
</head>

<body>
    @include('layout.navbar')
    <div id="content" class="d-flex flex-column">
        <div class="flex-fill index-bg">
            @yield('content')
        </div>
        @include('layout.footer')
    </div>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    @yield('customjs')
</body>

</html>