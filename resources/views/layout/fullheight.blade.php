@extends('layout.skeleton')

@section('skeleton-content')
<div class="container-fluid d-flex flex-column h-100 p-0">
    <div id="content" class="bg-dark flex-grow-1">
        @yield('content')
    </div>
    @include('layout.footer')
</div>
@endsection