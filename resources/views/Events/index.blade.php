@extends('Layout.main')
@section('title','| الحملات')
@section('content')

  <!-- main fullscreen img and overlay -->
  <div class="hero-wrap" style="background-image: url('images/volanteer1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          {{-- <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">رئيسيه</a></span> <span>حملات خيريه</span></p> --}}
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">الحملات الخيرية</h1>
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
              @if ($Event->image == null)
                <a href="#" class="block-20" style="background-image: url('images/hands1.jpg');">
              @else
                <a href="#" class="block-20" style="background-image: url('{{ asset(Storage::url($Event->image ))}}');"> 
              @endif         
              </a>       
                <div class="text p-4 d-block text-right">
                  <div class="meta mb-3">
                    <div><a href="#">{{$Event->created_at->diffForHumans()}}</a></div>
                    <div><a href="#">{{$Event->Organization->Org_Name}} </a></div>
                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span>عدد المشاركات : {{DB::table('Participations')->select('user_id')->where('even_id','=',$Event->id)->count()}}</a></div>
                  </div>
                  <h3 class="heading mb-4"><a href="/viewe/{{$Event->id}}">{{$Event->Name}}</a></h3>
                  <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> {{$Event->Date}} </span> <span><i class="icon-map-o"></i> {{$Event->Place}} </span></p>
                  <p {{$see=false}} {{$UsersInEvent=DB::table('Participations')->select('user_id')->where('even_id','=',$Event->id)->get()}}>{{$Event->Description}}</p>   
                  @foreach ($UsersInEvent as $UserInEvent) 
                   
                    @if($UserInEvent->user_id == Auth::id())
                      <div {{$see=true}}></div>
                    @endif     
                                  

                  @endforeach   
                  {{-- Suscribe Button Starts Here --}}
                  @if($see) 
                    <form class="" action="{{ url("/event/participation/$Event->id") }}" method="post">
                      @csrf
                      @method('DELETE')
                      <input type="submit" class="btn btn-info btn-block pl-5" value="الغاء مشاركة">
                    </form>
                  @else
                    <p><form class="" action="{{ url('/event/participation/'. $Event->id) }}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-info btn-block pl-5" value="مشاركة">
                    </form></p>
                  @endif
              </div>
            </div>
          </div>
        @endforeach
      </div>
      <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <div>            
            {{ $Eventt-> links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- main cards section -->
  
  @endsection