<!DOCTYPE html>
<html lang="{{\Illuminate\Support\Str::lower(\Illuminate\Support\Facades\App::getLocale())}}">
<head>
    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>@yield("title",config('app.name'))</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

    <!-- Favicon
  ================================================== -->
    <link rel="icon" type="image/png" href="{{asset('images/favicon.png')}}">

    <!-- CSS
  ================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/bootstrap.min.css')}}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome/css/all.min.css')}}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{asset('plugins/animate-css/animate.css')}}">
    <!-- slick Carousel -->
    <link rel="stylesheet" href="{{asset('plugins/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/slick/slick-theme.css')}}">
    <!-- Colorbox -->
    <link rel="stylesheet" href="{{asset('plugins/colorbox/colorbox.css')}}">
    <!-- Template styles-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @stack("stylesheets")

</head>
<body>
<div class="body-inner">

{{--TopBar Start--}}
@includeIf(config("template.topBar"))
<!--/ Topbar end -->
    <!-- Header start -->
@includeIf(config('template.header'))
<!--/ Header end -->
    <main>
        @yield("main-content")
    </main>


    {{--footer start--}}
    @includeIf(config('template.footer'))
    {{--footer end--}}
</div><!-- Body inner end -->
<!-- Javascript Files
    ================================================== -->

<!-- initialize jQuery Library -->
<script src="{{asset('plugins/jQuery/jquery.min.js')}}"></script>
<!-- Bootstrap jQuery -->
<script src="{{asset('plugins/bootstrap/bootstrap.min.js')}}" defer></script>
<!-- Slick Carousel -->
<script src="{{asset('plugins/slick/slick.min.js')}}"></script>
<script src="{{asset('plugins/slick/slick-animation.min.js')}}"></script>
<!-- Color box -->
<script src="{{asset('plugins/colorbox/jquery.colorbox.js')}}"></script>
<!-- shuffle -->
<script src="{{asset('plugins/shuffle/shuffle.min.js')}}" defer></script>

<!-- Google Map API Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
<!-- Google Map Plugin-->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<!-- Template custom -->
<script src="{{asset('js/script.js')}}"></script>
@stack("scripts")

</body>
</html>