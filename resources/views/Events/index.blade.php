@extends('Layout.main')
@section('title','| الحملات')
@section('content')

  <!-- main fullscreen img and overlay -->
  <div class="hero-wrap" style="background-image: url('images/volanteer1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">رئيسيه</a></span> <span>حملات خيريه</span></p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">حملات خيريه</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- main fullscreen img and overlay -->
  <!-- main cards section -->

  @can('event-creator')
  <a href ="/event/create"> <button class="btn btn-primary ml-5" type="button" name="button"> إنشاء حملة جديدة </button></a>    
  @endcan




  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <!-- this is lool started-->       
         @foreach($Eventt as $Event)
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="#" class="block-20" style="background-image: url('{{ asset(Storage::url($Event->image))}}');">
            </a>
            <div class="text p-4 d-block text-right">
              <div class="meta mb-3">
                <div><a href="#">{{$Event->created_at->diffForHumans()}}</a></div>
                <div><a href="#">{{$Event->Organization->Org_Name}} </a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span>عدد المشاركات</a></div>
              </div>
            <h3 class="heading mb-4"><a href="/viewe/{{$Event-> id}}">{{$Event->Name}}</a></h3>
              <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> {{$Event->Date}} </span> <span><i class="icon-map-o"></i> {{$Event->Place}} </span></p>
              <p>{{$Event->Description}}</p>
              <p><a href="#">انظم الي الحمله <i class="ion-ios-arrow-forward"></i></a></p>
            </div>
          </div>
        </div>
         @endforeach
      </div>
      <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <div>
            {{-- {{$Event->links()}} --}}
            
            {{ $Eventt-> links() }}

            {{-- // PAGINATION WORKINGGG !!! --}}
            </div>
            {{-- <ul>
              <li><a href="#">&lt;</a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&gt;</a></li>
            </ul> --}}
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- main cards section -->
  
  @endsection