<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themesflat.co/html/restaurant/basilicohtml/home_03.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2024 06:18:58 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basilico - Restaurant - @yield('title')</title>
    <link rel="stylesheet" href="{{url('app/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('app/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{url('app/dist/app.css')}}">
    <link rel="stylesheet" href="{{url('assets/fontawesome-free-6.4.2-web/css/all.min.css')}}">
    <!-- <link href="../../../../unpkg.com/aos%402.3.1/dist/aos.css" rel="stylesheet"> -->
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{url('assets/images/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{url('assets/images/favicon.png')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>

<body class="header-fixed main home-3">
    <!-- preloade -->
    <div class="preloader">
        <div class="clear-loading loading-effect-2">
            <span></span>
        </div>
    </div>
    <!-- /preload -->
    <div id="wrapper">
     @include('layouts.header')
     @yield('content')
     @include('layouts.footer')
    </div>
    <a id="scroll-top"></a>
    @if (session('success'))
    toastr.success("{{ session('success') }}");
    @endif

    @if (session('error'))
        toastr.error("{{ session('error') }}");
    @endif
    <script>
        // Set the options that I want
        toastr.options = {
        "closeButton": true,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-bottom-center",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
    </script>
    <!-- <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
    <script src="{{url('app/js/jquery.min.js')}}"></script>
    <script src="{{url('app/js/swiper-bundle.min.js')}}"></script>
    <script src="{{url('app/js/swiper.js')}}"></script>
    <script src="{{url('app/js/app.js')}}"></script>
    <script src="{{url('app/js/jquery.easing.js')}}"></script>
    <!-- <script src="../../../../unpkg.com/aos%402.3.1/dist/aos.js"></script> -->
    <script src="{{url('app/js/parallax.js')}}"></script>
    <script src="{{url('app/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('app/js/bootstrap.min.js')}}"></script>

    <script src="{{url('app/js/count-down.js')}}"></script>
    <script src="{{url('app/js/countto.js')}}"></script>

</body>


<!-- Mirrored from themesflat.co/html/restaurant/basilicohtml/home_03.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2024 06:19:26 GMT -->
</html>