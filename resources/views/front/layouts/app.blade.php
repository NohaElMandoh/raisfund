<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Ashekur Rahman">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>{{ config('app.name') }}</title>
    @include('front.partials.styles')
    <script src="{{ asset('front/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/ea9a619c4d.js" crossorigin="anonymous"></script>

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 @yield('style')
</head>

<body data-spy="scroll" data-target=".mainmenu-area">
    <!-- Prealoader-->
    <div class="preloader">
        <div class="waves-block">
            <div class="icon">
                <i class="fa fa-hourglass-half"></i>
            </div>
            <div class="waves wave-1"></div>
            <div class="waves wave-2"></div>
            <div class="waves wave-3"></div>
        </div>
    </div>
    @include('front.partials.nav')
    @yield('content')
  
    @include('front.partials.footer')
    @include('front.partials.scripts')
    @yield('script')
</body>

</html>
