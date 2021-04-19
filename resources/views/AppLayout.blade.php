<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bishawjit's Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
    <!-- header Started -->
		<!-- @include('Includes.header'); -->
        @yield('header')
	<!-- Header Ended -->

    <!-- header Started -->
		@include('FrontEnd.about')
	<!-- Header Ended -->

    <!-- ftco Started -->
        @include('FrontEnd.ftco')
    <!-- ftco Ended -->

    <!-- header Started -->
		@include('FrontEnd.resume')
	<!-- Header Ended -->

    <!-- services Started -->
        @include('FrontEnd.services')
    <!-- services Ended -->
 
    <!-- projects Started -->
        @include('FrontEnd.projects')
    <!-- projects Ended -->

    <!-- counter Started -->
        @include('FrontEnd.counter')
    <!-- counter Ended -->

	<!-- Blog Started -->
		@include('FrontEnd.blog')
	<!-- Blog Ended -->

    <!-- hireme Started -->
        @include('FrontEnd.hireme')
    <!-- hireme Ended -->

    <!-- contact Started -->
        @include('FrontEnd.contact')
    <!-- contact Ended -->
		
    <!-- Footer Started -->
		<!-- @include('Includes.footer'); -->
        @yield('footer')
	<!-- Footer Ended -->
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>