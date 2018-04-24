<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('tituloPort', 'Portfólio de Empresa') - Portal Formosa</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('port/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="{{ asset('port/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('port/vendor/devicons/css/devicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('port/vendor/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="{{ asset('port/css/resume.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('/assets/owl/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/owl/dist/assets/owl.theme.default.css') }}">
</head>

<body id="page-top">
@component('layouts.portfolio.components.navbar')
@endcomponent
@yield('container')

<footer>
    <a href="{{ route('inicio') }}">
        Portal Formosa &copy; 2018
    </a>
</footer>
<!-- Bootstrap core JavaScript -->
<script src="{{ asset('port/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('port/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Plugin JavaScript -->
<script src="{{ asset('port/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for this template -->
<script src="{{ asset('port/js/resume.min.js') }}"></script>

@yield('script-src')
</body>
</html>
