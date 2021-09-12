
<!DOCTYPE html>
<!--
developed by: jonny.perez.u@gmail.com
-->
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adminwork | @yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spectral:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('css/fonts.css')}}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="hold-transition @yield('body')"
      @if(session('success')) onload="toastSuccess('{{session('success')}}')" @endIf
      @if(session('error')) onload="toastError('{{session('error')}}')" @endIf
>
{{-- wrapper--}}
@yield('content')
<!-- ./wrapper -->

<script src="{{asset('js/app.js')}}"></script>

{{-- TODO: delete demo purpose, also the files--}}
<script src="{{asset('js/jquery/jquery.min.js')}}"></script>
<script src="{{asset('js/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('js/dashboard3.js')}}"></script>

@yield('js_resources')
</body>
</html>
