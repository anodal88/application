<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | @yield('title')</title>
    @section('stylesheets')
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">

        <link href="{{asset('css/animate.css')}}" rel="stylesheet">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
    @show
</head>

<body class="gray-bg">

@yield('main-content')

@section('javascripts')
    <!-- Mainly scripts -->
    <script src="{{asset('js/jquery-2.1.1.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
@show
</body>

</html>
