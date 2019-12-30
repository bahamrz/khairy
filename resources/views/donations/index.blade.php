
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

  @auth
  <a href ="/donation/create"> <button class="btn btn-primary ml-5" type="button" name="button"> CREATE NEW DONATION </button></a>
  @endauth)
    
    
  
  <section class="ftco-section">
    <div class="container">
      <div class="row d-flex">
        @foreach($product as $product)
        <div class="col-md-4 d-flex ftco-animate text-right">
          <div class="blog-entry align-self-stretch">
            <a href="#" class="block-20" style="background-image: url('{{ asset(Storage::url($product->image))}}');">
            </a>
            <div class="text p-4 d-block">
              <div class="meta mb-3">
                <div><a href="#">سبتمبر 10, 2020</a></div>
                <div><a href="#">{{$product->creator->name}}</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading mt-3 text-right"><a href="/view/{{$product->id}}">{{$product->name}}</a></h3>
              <p class="text-right"> {{$product -> description}} </p>
              <p><a class="bg-light pl-5" href="/reserve/{{$product->id}}" > حجز</a>
              <a class="bg-light pl-5" href="/view/{{$product->id}}"> تفاصيل</a></p>
            </div>
          </div>
        </div>
        @endforeach

     
    </div>
  </section>
  <!-- main cards section -->

  @endsection
