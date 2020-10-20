<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="Online,Nepal, Template, eCommerce">
    <meta name="robots" content="all">

    <title>Community Mart</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

     <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png')}}">


    <!-- Customizable CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/colors/green.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="/assets/css/owl.transitions.css">
    <link rel="stylesheet" href="/assets/css/animate.min.css">
    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
        <!-- Site CSS -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
     <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/images/logo.png">

    <script src="{{asset('js/carousel.js')}}"></script>

    <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
    <!--[if lt IE 9]>
    <script src="/assets/js/html5shiv.js"></script>
    <script src="/assets/js/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    @include('inc.navbar')

    <!-- Cart Message -->
    <div id="cart-message" class="center">
        <strong>Added to Cart</strong>
    </div>

    <!-- Message -->
    <div id="message" class="center">
        <strong>Login to<br>Add to Cart</strong>
    </div>

    @yield('content')
    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>
    @include('inc.footer')

    <!-- JavaScripts placed at the end of the document so the pages load faster -->
    <script src="/assets/js/jquery-1.10.2.min.js"></script>
    <script src="/assets/js/jquery-migrate-1.2.1.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/gmap3.min.js"></script>
    <script src="/assets/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/css_browser_selector.min.js"></script>
    <script src="/assets/js/echo.min.js"></script>
    <script src="/assets/js/jquery.easing-1.3.min.js"></script>
    <script src="/assets/js/bootstrap-slider.min.js"></script>
    <script src="/assets/js/jquery.raty.min.js"></script>
    <script src="/assets/js/jquery.prettyPhoto.min.js"></script>
    <script src="/assets/js/jquery.customSelect.min.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/buttons.js"></script>
    <script src="/assets/js/scripts.js"></script>
    <script src="/assets/js/cart.js"></script>
    <script src="/assets/js/navbar.js"></script>
    <!-- ALL JS FILES -->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="{{asset('js/carousel.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{asset('js/jquery.superslides.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-select.js')}}"></script>
    <script src="{{asset('js/inewsticker.js')}}"></script>
    <script src="{{asset('js/bootsnav.js.')}}"></script>
    <script src="{{asset('js/images-loded.min.js')}}"></script>
    <script src="{{asset('js/isotope.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/baguetteBox.min.js')}}"></script>
    <script src="{{asset('js/form-validator.min.js')}}"></script>
    <script src="{{asset('js/contact-form-script.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>


</body>
</html>
