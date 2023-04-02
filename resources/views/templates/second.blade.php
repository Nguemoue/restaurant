<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Constra - Construction Html5 Template</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

    <!-- Favicon
  ================================================== -->
    <link rel="icon" type="image/png" href="images/favicon.png">

    <!-- CSS
  ================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="plugins/animate-css/animate.css">
    <!-- slick Carousel -->
    <link rel="stylesheet" href="plugins/slick/slick.css">
    <link rel="stylesheet" href="plugins/slick/slick-theme.css">
    <!-- Colorbox -->
    <link rel="stylesheet" href="plugins/colorbox/colorbox.css">
    <!-- Template styles-->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="body-inner">
@includeIf("_partials.topBar")
<!--/ Topbar end -->
    <!-- Header start -->
    @includeIf("_partials.header2")
    <!--/ Header end -->

    <main>
        @yield("main-content")
    </main>

@includeIf("_partials.footer")


<!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="plugins/jQuery/jquery.min.js"></script>
    <!-- Bootstrap jQuery -->
    <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
    <!-- Slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/slick/slick-animation.min.js"></script>
    <!-- Color box -->
    <script src="plugins/colorbox/jquery.colorbox.js"></script>
    <!-- shuffle -->
    <script src="plugins/shuffle/shuffle.min.js" defer></script>


    <!-- Google Map API Key-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
    <!-- Google Map Plugin-->
    <script src="plugins/google-map/map.js" defer></script>

    <!-- Template custom -->
    <script src="js/script.js"></script>

</div><!-- Body inner end -->
</body>

</html>