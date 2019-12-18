@extends('Layout.main')
@section('title','| التبرعات')
@section('content')
  <!-- main fullscreen img and overlay -->
  <div class="hero-wrap" style="background-image: url('images/bg9.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">رئيسيه</a></span> <span>تبرعات</span></p>
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
            <a href="#" class="block-20" style="background-image: url('{{ asset('../storage/app/public/$product->image')}}');">
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
            <a href="#" class="block-20" style="background-image: url('images/image_2.jpg');">
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
            <a href="#" class="block-20" style="background-image: url('images/image_3.jpg');">
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
            <a href="#" class="block-20" style="background-image: url('images/image_4.jpg');">
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
            <a href="#" class="block-20" style="background-image: url('images/image_5.jpg');">
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
            <a href="#" class="block-20" style="background-image: url('images/image_6.jpg');">
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

  @endsection
