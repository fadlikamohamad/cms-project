<!DOCTYPE html>
<html lang="en">
  <head>

    <title>My Articles</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="{!! asset('assets/img/Article_Logo.jpg') !!}" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('selling/fonts/icomoon/style.css') !!}">

    <link rel="stylesheet" href="{!! asset('selling/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('selling/css/jquery-ui.css') !!}">
    <link rel="stylesheet" href="{!! asset('selling/css/owl.carousel.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('selling/css/owl.theme.default.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('selling/css/owl.theme.default.min.css') !!}">

    <link rel="stylesheet" href="{!! asset('selling/css/jquery.fancybox.min.css') !!}">

    <link rel="stylesheet" href="{!! asset('selling/css/bootstrap-datepicker.css') !!}">

    <link rel="stylesheet" href="{!! asset('selling/fonts/flaticon/font/flaticon.css') !!}">

    <link rel="stylesheet" href="{!! asset('selling/css/aos.css') !!}">

    <link rel="stylesheet" href="{!! asset('selling/css/style.css') !!}">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-wrap">
      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>
     
      <div class="top-bar py-3 bg-light" id="home-section">
        <div class="container">
          <div class="row align-items-center">
           
            <div class="col-6 text-left">
              <ul class="social-media">
                <!-- <li><a href="#" class=""><span class="icon-facebook"></span></a></li>
                <li><a href="#" class=""><span class="icon-twitter"></span></a></li> -->
                <li><a href="https://github.com/fadlikamohamad/cms-project" class=""><span class="icon-github"></span></a></li>
                <li><a href="https://www.instagram.com/kang_fadly/" class=""><span class="icon-instagram"></span></a></li>
                <li><a href="https://api.whatsapp.com/send?phone=6285706363468" class=""><span class="icon-whatsapp"></span></a></li>
                <!-- <li><a href="#" class=""><span class="icon-linkedin"></span></a></li> -->
              </ul>
            </div>
            <div class="col-6">
              <p class="mb-0 float-right">
                <!-- <span class="mr-3"><a href="tel://#"> <span class="icon-phone mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">085706363468</span></a></span> -->
                <!-- <span><a href="#"><span class="icon-envelope mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">fadlikamohamad@gmail.com</span></a></span> -->
                <span><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();"><span class="icon-user mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">Logout ({{ Auth::user()->name }})</span></a></span>
                                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          @csrf
                                      </form>
              </p>
              
            </div>
          </div>
        </div> 
      </div>     
      @yield('content')
      <br> 
    </div>

    <script src="{!! asset('selling/js/jquery-3.3.1.min.js') !!}"></script>
    <script src="{!! asset('selling/js/jquery-migrate-3.0.1.min.js') !!}"></script>
    <script src="{!! asset('selling/js/jquery-ui.js') !!}"></script>
    <script src="{!! asset('selling/js/popper.min.js') !!}"></script>
    <script src="{!! asset('selling/js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('selling/js/owl.carousel.min.js') !!}"></script>
    <script src="{!! asset('selling/js/jquery.stellar.min.js') !!}"></script>
    <script src="{!! asset('selling/js/jquery.countdown.min.js') !!}"></script>
    <script src="{!! asset('selling/js/bootstrap-datepicker.min.js') !!}"></script>
    <script src="{!! asset('selling/js/jquery.easing.1.3.js') !!}"></script>
    <script src="{!! asset('selling/js/aos.js') !!}"></script>
    <script src="{!! asset('selling/js/jquery.fancybox.min.js') !!}"></script>
    <script src="{!! asset('selling/js/jquery.sticky.js') !!}"></script>
    <script src="{!! asset('selling/js/main.js') !!}"></script>
    
  </body>

  <style type="text/css">
    .pagination li{
        float: left;
        list-style-type: none;
        margin:5px;
    }
  </style>

</html>