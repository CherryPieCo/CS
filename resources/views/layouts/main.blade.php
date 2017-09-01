<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <title>Eren</title>
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="/css/animate.min.css">
  <link rel="stylesheet" type="text/css" href="/css/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="/css/owl.transitions.css">
  <link rel="stylesheet" type="text/css" href="/css/cubeportfolio.min.css">
  <link rel="stylesheet" type="text/css" href="/css/jquery.fancybox.css">
  <link rel="stylesheet" type="text/css" href="/css/bootsnav.css">
  <link rel="stylesheet" type="text/css" href="/css/settings.css">
  <link rel="stylesheet" type="text/css" href="/css/loader.css">
  <link rel="stylesheet" type="text/css" href="/css/style.css">

  <link rel="shortcut icon" href="/images/favicon.png">


  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>

  <!--Loader-->
  <div class="loader">
    <div class="spinner-load">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
  </div>


  <div>
      @include('partials.header')
      
      @yield('content')
      
      @include('partials.footer')
      @include('partials.copyright')
  </div>
  
  <script src="/js/jquery-2.2.3.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/bootsnav.js"></script>
  <script src="/js/jquery.parallax-1.1.3.js"></script>
  <script src="/js/jquery.appear.js"></script>
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/jquery.cubeportfolio.min.js"></script>
  <script src="/js/jquery.fancybox.js"></script>
  <script src="/js/jquery.themepunch.tools.min.js"></script>
  <script src="/js/jquery.themepunch.revolution.min.js"></script>
  <script src="/js/revolution.extension.layeranimation.min.js"></script>
  <script src="/js/revolution.extension.navigation.min.js"></script>
  <script src="/js/revolution.extension.parallax.min.js"></script>
  <script src="/js/revolution.extension.slideanims.min.js"></script>
  <script src="/js/revolution.extension.video.min.js"></script>
  <script src="/js/kinetic.js"></script>
  <script src="/js/jquery.final-countdown.js"></script>
  <script src="/js/functions.js"></script>
</body>


</html>