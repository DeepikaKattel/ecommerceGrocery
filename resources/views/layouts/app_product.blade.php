<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CG</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

     <!-- Css Styles -->
     <link rel="stylesheet" href="{{ asset('Theme/css/bootstrap.min.css')}}" type="text/css">
     <link rel="stylesheet" href="{{ asset('Theme/css/font-awesome.min.css')}}" type="text/css">
     <link rel="stylesheet" href="{{ asset('Theme/css/themify-icons.css')}}" type="text/css">
     <link rel="stylesheet" href="{{ asset('Theme/css/elegant-icons.css')}}" type="text/css">
     <link rel="stylesheet" href="{{ asset('Theme/css/owl.carousel.min.css')}}" type="text/css">
     <link rel="stylesheet" href="{{ asset('Theme/css/nice-select.css')}}" type="text/css">
     <link rel="stylesheet" href="{{ asset('Theme/css/jquery-ui.min.css')}}" type="text/css">
     <link rel="stylesheet" href="{{ asset('Theme/css/slicknav.min.css')}}" type="text/css">
     <link rel="stylesheet" href="{{ asset('Theme/css/style.css')}}" type="text/css">
     <link rel="stylesheet" href="{{ asset('Theme/css/slider.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    @include('inc.navbar_product')

    @yield('content')

    @include('inc.footer_product')

    <!-- Js Plugins -->
    <script src=" {{ asset('Theme/js/jquery-3.3.1.min.js')}}"></script>
    <script src=" {{ asset('Theme/js/bootstrap.min.js')}}"></script>
    <script src=" {{ asset('Theme/js/jquery-ui.min.js')}}"></script>
    <script src=" {{ asset('Theme/js/jquery.countdown.min.js')}}"></script>
    <script src=" {{ asset('Theme/js/jquery.nice-select.min.js')}}"></script>
    <script src=" {{ asset('Theme/js/jquery.zoom.min.js')}}"></script>
    <script src=" {{ asset('Theme/js/jquery.dd.min.js')}}"></script>
    <script src=" {{ asset('Theme/js/jquery.slicknav.js')}}"></script>
    <script src=" {{ asset('Theme/js/owl.carousel.min.js')}}"></script>
    <script src=" {{ asset('Theme/js/main.js')}}"></script>
    <script src=" {{ asset('Theme/js/slider.js')}}"></script>
</body>

</html>
