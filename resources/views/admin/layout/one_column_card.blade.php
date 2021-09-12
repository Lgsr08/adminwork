@extends('admin.layout.base')

@section('columns')

    <div class="@yield('class-column', 'col-lg-12')">
        <div class="card">
            @yield('content-card')
        </div>
    </div>

@endsection
