
<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Nursery Management System</title><link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CLibre+Baskerville:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{url('/frontend/plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('/frontend/plugins/furniture-icon/style.css')}}">
    <link rel="stylesheet" href="{{url('/frontend/plugins/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('/frontend/plugins/owl-carousel/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('/frontend/plugins/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{url('/frontend/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css')}}">
    <link rel="stylesheet" href="{{url('/frontend/plugins/slick/slick/slick.css')}}">
    <link rel="stylesheet" href="{{url('/frontend/plugins/jquery-ui/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{url('/frontend/plugins/lightGallery-master/dist/css/lightgallery.min.css')}}">
    <link rel="stylesheet" href="{{url('/frontend/css/style.css')}}">
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
  <body>
  @include('website.fixed.header')
    <main class="ps-main">
    @yield('content')
    </main>
    @include('website.fixed.footer')
    <div class="ps-loading"><div class="loader ">
<div class="loader__item"></div>
<div class="loader__item"></div>
<div class="loader__item"></div>
<div class="loader__item"></div>
<div class="loader__item"></div>
</div>
    </div>
    <script src="{{url('/frontend/plugins/jquery.min.js')}}"></script>
    <script src="{{url('/frontend/plugins/lightGallery-master/dist/js/lightgallery-all.min.js')}}"></script>
    <script src="{{url('/frontend/plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{url('/frontend/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{url('/frontend/plugins/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{url('/frontend/plugins/jquery-bar-rating/dist/jquery.barrating.min.js')}}"></script>
    <script src="{{url('/frontend/plugins/imagesloaded.pkgd.js')}}"></script>
    <script src="{{url('/frontend/plugins/masonry.pkgd.min.js')}}"></script>
    <script src="{{url('/frontend/plugins/isotope.pkgd.min.js')}}"></script>
    <script src="{{url('/frontend/plugins/slick/slick/slick.min.js')}}"></script>
    <script src="{{url('/frontend/plugins/jquery.matchHeight-min.js')}}"></script>
    <script src="{{url('/frontend/plugins/elevatezoom/jquery.elevatezoom.js')}}"></script>
    <script src="{{url('/frontend/plugins/gmap3.min.js')}}"></script>
    <script src="{{url('/frontend/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Custom scripts-->
    <script src="{{url('/frontend/js/main.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsUcTjt43mTheN9ruCsQVgBE-wgN6_AfY&amp;region=GB"></script>
  </body>


</html>