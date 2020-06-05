<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags-->
  <!-- Title-->
  <title>{{config('app.name')}}</title>
  <!-- Favicon-->
  <link rel="icon" href="img/core-img/favicon.ico">
  <!-- Core Stylesheet-->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<x-paceloader />

<header class="header-area header2">
  <x-nav-bar />
  @yield('header')
</header>

@yield('body')

<x-footer />

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/default/classy-nav.min.js') }}"></script>
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/default/jquery.scrollup.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('js/default/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/jquery.animatedheadline.min.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/jarallax.min.js') }}"></script>
<script src="{{ asset('js/jarallax-video.min.js') }}"></script>
<script src="{{ asset('js/default/cookiealert.js') }}"></script>
<script src="{{ asset('js/default/jquery.passwordstrength.js') }}"></script>
<script src="{{ asset('js/default/mail.js') }}"></script>
<script src="{{ asset('js/default/active.js') }}"></script>

</body>
</html>
