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
            <div class="p-3 h-100 shade d-flex flex-column justify-content-center align-items-center">
                @yield('content')
            </div>
        </div>
        @include('layout.footer')
    </div>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    @yield('customjs')
</body>

</html>