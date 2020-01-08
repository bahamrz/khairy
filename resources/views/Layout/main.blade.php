<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Tajawal&display=swap" rel="stylesheet"> 
    <link href="{{asset ('css/Baha_style.css')}}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css"crossorigin="anonymous">
    <!-- Font Awesome Font library (For Footer Icons ) -->
    <link rel="stylesheet" href="{{ asset ('css/font-awesome.min.css')}}"  crossorigin="anonymous">
    <title>خيري @yield('title')</title>
    <!-- <link href="/css/Baha_style.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{asset('css/bootstrap-rtl.css')}}">
    <link rel="stylesheet" href="{{ asset ('/css/bootstrap-rtl.css')}}"
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://kit.fontawesome.com/75581ac055.js" crossorigin="anonymous"></script>
    <style>
      html, body, h1, h2, h3, h4, h5, h6 
      {
        font-family: 'Tajawal', sans-serif !important; 
      }
      </style>
  </head>
  <body>
<!-- ******* NavBar ******* -->
<!-- nav -->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar align-items-rghit">
  <div class="container">
      {{-- <a class="navbar-brand" href="signin">تسجيل الدخول</a> --}}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> 
    </button>
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav justify-content-end">
          <li class="nav-item active"><a href="/" class="nav-link">الرئيسية</a></li>
          <li class="nav-item"><a href="/donation" class="nav-link">التبرعات</a></li>
          <li class="nav-item"><a href="/event" class="nav-link">الحملات</a></li>
          <li class="nav-item"><a href="/gallery" class="nav-link">استوديو صور</a></li>
          <li class="nav-item"><a href="/aboutus" class="nav-link">كيف تستعمل خيري</a></li>
          <li class="nav-item"><a href="/contactus" class="nav-link">تواصل معنا</a></li>
      </ul>
      <ul class="nav navbar-nav flex-row justify-content-between mr-auto  " >
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('تسجيل الدخول') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('تسجيل حساب جديد') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href ="{{route('user')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                
                                
                                <a class="dropdown-item" href="{{route('user')}}" >User Profile </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                        
                                        
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          @csrf
                                        </form>
                                      </a>
                                      @can('manage-users')
                                      <a class ="dropdown-item" href="{{route ('users.index')}}">User Managment</a>
                                      @endcan
                                </div>
                            </li>
                        @endguest
                    </ul>
    </div>
  </div>
</nav>
<!-- END nav -->
<!-- END of NAVBAR CODE -->


@yield('content')



 <!-- footer starts -->
 <footer class="ftco-footer ">
    <div class="overlay"></div>
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6">
          <div class="ftco-footer-widget mb-4 text-right">
            <h2 class="ftco-heading-1"style="text-align:right;"> مشروع خيري</h2>
            <p>منصه  غير ربحية تقدم خدماتها للجميع ويمكن أن يشارك فيها الجميع  </p>
            <p>مودة | تعاون | عطاء </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="ftco-footer-widget mb-4 text-right">
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-youtube"></span></a></li>
            </ul>
            
          </div>
        </div>
        
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p>
            Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> All rights reserved  <i class="icon-share" aria-hidden="true"></i>  <a href="#" target="_blank"> Khairy Group | Tec Camp Tripoli</a>
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- /footer ends -->
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>
<!-- End of FOOTER TEST -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{ asset('js/popper.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js')}}"></script>
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('js/aos.js')}}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js')}}"></script>
    <script src="{{ asset('js/jquery.timepicker.min.js')}}"></script>
    <script src="{{ asset('js/scrollax.min.js')}}"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false')}}"></script> -->
    <!-- <script src="{{ asset('js/google-map.js')}}"></script> -->
    <script src="{{ asset('js/main.js')}}"></script>
  </body>
</html>