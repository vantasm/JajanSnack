<!DOCTYPE html>
<html lang="en">
    <head>
        <title>JajanSnack</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link href="{{ URL::to('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap') }}" rel="stylesheet">
        <link href="{{ URL::to('https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap') }}" rel="stylesheet">
        <link href="{{ URL::to('https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap') }}" rel="stylesheet">
        
        <link rel="stylesheet" href="{{ URL::to('css/open-iconic-bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/animate.css') }}">
        
        <link rel="stylesheet" href="{{ URL::to('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/magnific-popup.css') }}">
    
        <link rel="stylesheet" href="{{ URL::to('css/aos.css') }}">
    
        <link rel="stylesheet" href="{{ URL::to('css/bootstrap-datepicker.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/jquery.timepicker.css') }}">
    
        <link rel="stylesheet" href="{{ URL::to('css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/icomoon.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/style.css') }}">

        <link rel="stylesheet" href="{{ URL::to('css/fontawesome/css/all.css') }}">
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
      </head>
<body>
    @include("layouts/include/navbar")
    @yield("content")
    @include("layouts/include/footer")
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('js/scrollax.min.js') }}"></script>
    <script src="{{ asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false') }}"></script>
    <script src="{{ asset('js/google-map.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/shop.js') }}"></script>
</body>
</html>