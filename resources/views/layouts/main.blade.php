<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>АЗС Ориё</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('img/logo.png')}}" rel="icon">
  <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!--  CSS Files -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('https://unpkg.com/leaflet@1.6.0/dist/leaflet.css')}}" />
  

  <link rel="stylesheet" href="{{asset('dist/simpleSlider.min.css')}}">
<script src="{{asset('dist/simpleSlider.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/theme.min.css')}}">
  


  <!-- Main CSS File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

 

  
</head>
<body>
@include('layouts.header')
            @yield('content')
    @include('layouts.footer')


 <!-- JS Files -->
 <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('vendor/aos/aos.js')}}"></script>
  <script src="{{asset('https://unpkg.com/leaflet@1.6.0/dist/leaflet.js')}}"></script>



    <script src="{{asset('js/index.js')}}"></script>
   

  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script>
  </body>

</html>