@extends('Layout.main')
@section('title','| التبرعات')
@section('content')
  <!-- main fullscreen img and overlay -->
  <div class="hero-wrap" style="background-image: url('images/bg9.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          {{-- <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">رئيسيه</a></span> <span>تبرعات</span></p> --}}
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">التبرعات</h1>
          </div>
        </div>
      </div>
  </div>
  <!-- main fullscreen img and overlay -->
  <!-- main cards section -->

  @auth
  <a href ="/donation/create"> <button class="btn btn-primary ml-5" type="button" name="button">إنشاء تبرع جديد</button></a>
  @endauth

  <!-- SHOW seccess message if the claim button pressed and gone throw successfuly -->
<div class="container mt-3">
      @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
      @endif
      @if(Session::has('fail'))
        <div class="alert alert-danger">
          {{Session::get('fail')}}
        </div>
      @endif
</div>

  <section class="ftco-section">
    <div class="container">
      <div class="row d-flex">
        @foreach($products as $product)
          <div class="col-md-4 d-flex ftco-animate text-right">
            <div class="blog-entry align-self-stretch">
              @if($product->image == null)
                <a href="#" class="block-20" style="background-image: url('images/love.jpg');"></a>
              @else
                <a href="#" class="block-20" style="background-image: url('{{ asset(Storage::url($product->image))}}');"></a>
              @endif
                <div class="text p-4 d-block">
                  <div class="meta mb-3">
                    <div><a href="#">{{$product->created_at->toDateString()}}</a></div>
                      <div><a href="#">{{$product->creator->name}}</a></div>
                        <div><a href="#" class="meta-chat"><span class="icon-user"></span> {{DB::table('donation_resarvations')->select('user_id')->where('product_id','=',$product->id)->count()}}</a></div>
                  </div>
                  <h3 class="heading mt-3 text-right"><a href="/view/{{$product->id}}">{{$product->name}}</a></h3>
                  <p class="text-right" {{$see=false}}{{ $Usersdonation=DB::table('donation_resarvationS')->select('user_id')->where('PRODUCT_ID','=',$product->id)->get()}}> {{$product -> description}} </p>
                 @foreach ($Usersdonation as $Userdonation)

                    @if($Userdonation->user_id == Auth::id())
                      <div {{$see=true}}></div>
                    @endif

                  @endforeach
                  @if($see)
                  <p><form class="" action="{{  url('/product/resarvation/'. $product->id) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <input type="submit" class="btn btn-info btn-block pl-5" value="الغاء الحجز">
                    </form></p>
                  @elseif(Auth::id() == $product->user_id)
                  {{-- @if(Auth::id() == $product->user_id) --}}
                  @else
                  <p><form class="" action="{{ url('/product/resarvation/'. $product->id) }}" method="post">
                        @csrf
                        {{-- <input type="submit" class="btn btn-info btn-block pl-5" value="مشاركة"> --}}
                          <input  type="submit" class="btn btn-info btn-block pl-5" value="حجز" >
                    </form></p>
                    @endif
                  {{-- <p><a class="bg-light pl-5 disabled" href="/reserve/{{$product->id}}"
                    style="pointer-events: none !important;
                      cursor: default !important;
                      color: gray !important;"> حجز</a>
                  @else
                  <p><a type="submit" class="bg-light pl-5" href="/reserve/{{$product->id}}"> حجز</a>
                  @endif --}}
                  <a class="btn bg-warning btn-block pl-5" href="/view/{{$product->id}}"> تفاصيل</a></p>
                </div>
            </div>
        </div>
        @endforeach
      </div>
        <!-- block-27 is that wierd style try removing it and it will be normal -->
        <div class="block-27 mt-5 pagination justify-content-center">
          {{ $products-> links() }}
        </div>
    </div>
  </section>
  @endsection
