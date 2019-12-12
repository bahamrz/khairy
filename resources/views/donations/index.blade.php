<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" />
  <title>خيري - تبرعات</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="{{asset('css/bootstrap-rtl.css')}}">
  <link href="{{asset('https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700')}}" rel="stylesheet">
  <link href="{{asset('https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700')}}" rel="stylesheet">
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
</head>
<body>
  <!-- nav -->
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar align-items-rghit">
    <div class="container">
        <a class="navbar-brand" href="signup.html">تسجيل الدخول</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span>
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav justify-content-end">
            <li class="nav-item active"><a href="index.html" class="nav-link">الرئيسية</a></li>
            <li class="nav-item"><a href="donations" class="nav-link">التبرعات</a></li>
            <li class="nav-item"><a href="events.html" class="nav-link">الحملات</a></li>
            <li class="nav-item"><a href="gallery.html" class="nav-link">استوديو صور</a></li>
            <li class="nav-item"><a href="aboutkhairy.html" class="nav-link">كيف تستعمل خيري</a></li>
            <li class="nav-item"><a href="ContactUs.html" class="nav-link">تواصل معنا</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
  <!-- main fullscreen img and overlay -->
  <div class="hero-wrap" style="background-image: url('images/bg9.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">رئيسيه</a></span> <span>تبرعات</span></p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">التبرعات</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- main fullscreen img and overlay -->
  <!-- main cards section -->
  <section class="ftco-section">
    <div class="container">
      <div class="row d-flex">
        @foreach($product as $product)
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
            </a>
            <div class="text p-4 d-block">
              <div class="meta mb-3">
                <div><a href="#">سبتمبر 10, 2020</a></div>
                <div><a href="#">{{$product->name}}</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading mt-3 text-right"><a href="#">{{$product->name}}</a></h3>
              <p class="text-right"> {{$product -> description}} </p>
            </div>
          </div>
        </div>
        @endforeach
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
            </a>
            <div class="text p-4 d-block">
              <div class="meta mb-3">
                <div><a href="#">2020 ,10 سبتمبر</a></div>
                <div><a href="#">احمد احمد</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading mt-3 text-right"><a href="#">هنا عنوان تاني لموضوع تاني :v</a></h3>
              <p class="text-right">بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا بلا</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
            </a>
            <div class="text p-4 d-block">
              <div class="meta mb-3">
                <div><a href="#">سبتمبر 10, 2020</a></div>
                <div><a href="#">علي علي</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading mt-3 text-right"><a href="#">وصلت الفكره اعتقد :v</a></h3>
              <p class="text-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, reprehenderit maxime eveniet consectetur, rerum possimus id alias quos non sequi, facere veritatis architecto perspiciatis quo. Nobis modi, doloribus dolor repellat.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/image_4.jpg');">
            </a>
            <div class="text p-4 d-block">
              <div class="meta mb-3">
                <div><a href="#">سبتمبر 10, 2020</a></div>
                <div><a href="#">محمود محمود</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading mt-3 text-right"><a href="#">بالانجليزي the title of the subject</a></h3>
              <p class="text-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et laudantium at rerum officia beatae totam itaque possimus cumque excepturi odio, non modi explicabo facere nemo! Totam et nisi, facere ab.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/image_5.jpg');">
            </a>
            <div class="text p-4 d-block">
              <div class="meta mb-3">
                <div><a href="#">سبمبر 10, 2020</a></div>
                <div><a href="#">وائل وائل</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading mt-3 text-right"><a href="#">another one</a></h3>
              <p class="text-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/image_6.jpg');">
            </a>
            <div class="text p-4 d-block">
              <div class="meta mb-3">
                <div><a href="#">سبتمبر 10, 2020</a></div>
                <div><a href="#">بهاء بهاء</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading mt-3 text-right"><a href="#">and another one</a></h3>
              <p class="text-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio praesentium fugiat quae sequi eaque! Quasi, at. Voluptatum eligendi molestiae, repellendus ipsam, nulla fuga autem nostrum perspiciatis veniam minima, eos voluptatem.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              <li><a href="#">&lt;</a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&gt;</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- main cards section -->
  <!-- footer starts -->
  <footer class="ftco-footer ftco-section img">
    <div class="overlay"></div>
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-3">
          <div class="ftco-footer-widget mb-4 text-right">
            <h2 class="ftco-heading-2">مــن نــحــن</h2>
            <p>منصه خيري تم انشاءها من قبل شباب ليبيين في مخيم تيك كامب المقدم من شركه تطوير وهيا منصه غير ربحيه تهدف الي </p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-youtube"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="ftco-footer-widget mb-4 text-right">
            <h2 class="ftco-heading-2">اكبر الحملات الخيريه</h2>
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">حمله إيواء</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> فبراير 12, 2020</a></div>
                  <div><a href="#"><span class="icon-person"></span> جمعية الهام</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style="background-image: url(images/cleaning.png);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">حمله تنظيف</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> براير 12, 2020</a></div>
                  <div><a href="#"><span class="icon-person"></span> جمعيه شباب</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="ftco-footer-widget mb-4 ml-md-4 text-right">
            <h2 class="ftco-heading-2">صفحات رئيسيه</h2>
            <ul class="list-unstyled">
                <li><a href="index.html" class="py-2 d-block">رئيسيه</a></li>
                <li><a href="donations.html" class="py-2 d-block">تبرعات</a></li>
                <li><a href="events.html" class="py-2 d-block">حملات خيريه</a></li>
                <li><a href="aboutkhairy.html" class="py-2 d-block">كيف استعمل خيري؟</a></li>
                <li><a href="gallery.html" class="py-2 d-block">ألبوم الصور</a></li>
                <li><a href="ContactUs.html" class="py-2 d-block">تواصل معنا</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="ftco-footer-widget mb-4 text-right">
            <h2 class="ftco-heading-2"> للتواصل معنا</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">حي الاندلس \ طرابلس \ ليبيا \ خلف مش عارف شني</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">0000000 92 218+</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@khairy.com</span></a></li>
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
            </script> All rights reserved | This website is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="#" target="_blank">Tec-Camp khairy group</a>
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer ends-->
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('js/aos.js')}}"></script>
  <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('js/jquery.timepicker.min.js')}}"></script>
  <script src="{{asset('js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('js/google-map.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
