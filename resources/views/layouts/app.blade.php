<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title') </title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('shop/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('shop/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('shop/css/animsition.min.css')}}" rel="stylesheet">
    <link href="{{asset('shop/css/animate.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('shop/css/style.css')}}" rel="stylesheet">
    @yield('stylesheet')

</head>
<body>

    <!-- Scripts -->
    <!--/end:Site wrapper -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="{{asset('shop/js/jquery.min.js')}}"></script>
    <script src="{{asset('shop/js/tether.min.js')}}"></script>
    <script src="{{asset('shop/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('shop/js/animsition.min.js')}}"></script>
    <script src="{{asset('shop/js/bootstrap-slider.min.')}}js"></script>
    <script src="{{asset('shop/js/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('shop/js/headroom.js')}}"></script>
    <script src="{{asset('shop/js/foodpicky.min.js')}}"></script>
    @yield('jscript')
</body>
</html>
