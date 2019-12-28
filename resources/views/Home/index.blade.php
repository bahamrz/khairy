@extends('Layout.main')
@section('title','| الرئيسية')
@section('content')

<div class="hero-wrap" style="background-image: url('images/bg001.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> الخير للجميع وبالجميع</h1>
            <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">مودة  | تعاون |  عطاء </p>

            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="/login" class="btn btn-white btn-outline-white px-4 py-3 "><span class="icon-person mr-2"></span>أنظم الان</a></p>
          </div>
        </div>
      </div>
    </div>
    <section class="ftco-counter ftco-intro" id="section-counter">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-1 align-items-stretch">
              <div class="text text-right">
              	<span> في ليبيا يحتاج عدد </span>
                <strong class="number" data-number="152030">0</strong>
                <span>إلى أشكال مختلفة من المساعدة</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-2 align-items-stretch">
              <div class="text text-right">
              	<h3 class="mb-4 text-right">تبرعات خيرية</h3>
              	<p>نستطيع بعرض مانملكه ولا نحتاجه أن يصل إلى من لا يملكه ويحتاجه.</p>
              	<p><a href="events" class="btn btn-white px-3 py-2 mt-2 text-right">تبرع الآن</a></p>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-3 align-items-stretch">
              <div class="text text-right">
              	<h3 class="mb-4 text-right ">حملات تطوعية</h3>
              	<p>العطاء هو مشاركة الأخرين لنقاسم الاستفادة مع الجميع</p>
              	<p><a href="donation" class="btn btn-white px-3 py-2 mt-2">شارك بحملة</a></p>
              </div>
            </div>
          </div>
    		</div>
    	</div>
    </section>
    	<div class="container">
    		<div class="row">
          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-donation-1"></span></div>
              <div class="media-body pl-4 text-right color-3">
                <h2 class="heading text-primary">الحملات التطوعية</h2>
                <h3>  عدد المنظمين حتى الآن <strong class="number" data-number="743">0</strong>   </h3>
              </div>
            </div>      
          </div>
          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-charity"></span></div>
              <div class="media-body pl-4 text-right">
                <h2 class="heading text-primary">التبرعات الخيرية</h2>
                <h3>  عدد طلبات وعروض التبرع حتى الآن <strong class="number" data-number="352">0</strong>   </h3>
              </div>
            </div>      
          </div>
          </div>
        </div>
    	</div>
    </section> -->

    <section style="background-color:#7a2e76">
      	<div>
    		<div class="row justify-content-center mb-2 pb-2">
          <div class="col-md-9 heading-section  text-right">
            <h2 class="mb-4" style=color:#ffffff; >مشروع خيري</h2>
            <h4 style=color:#ffffff> تم انشاءه بواسطة فريق خيري خلال فترة التدريب في Tec Camp Tripoli 2019</h4>
          </div>
        </div>
    		<div class="row">
        
    </section>

     <section class=" bg-light">
    	<div class="container-fluid">
    		<div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-5 heading-section  text-center">
            <h2 class="mb-4">التبرعات</h2>
            <p>اخر التبرعات المنشورة على خيري</p>
          </div>
        </div>
    		<div class="row">

    @foreach($product as $product)            
        
         <div class="col-sm-3 col-md-4 ftco-animate " style="">
          <div class="item">
            <div class="cause-entry align-self-stretch">
            <a href="#" class="img" style="background-image: url('images/image_1.jpg');"></a>
            <div class="text p-3 p-md-4 text-right">
                <div><h3><a href="{{ url("/view/$product->id") }}">{{$product-> name}}</a></h3></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              <p class="text-truncate text-right" style="display:block "> {{$product -> description}} </p>
              <span class="donation-time mb-3 d-block">ينتهي خلال 3 ايام</span>
              <div class="progress custom-progress-success">
		                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
                    <span class="fund-raised d-block">عدد الطلبات  (8)</span>
            </div>
            </div>
          </div>
         </div>
        
    @endforeach
      
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

 

    <section style="background-color:#14aeb0">
    <div class="container-fluid">
    		<div class="row justify-content-center mb-4 pb-4">
          <div class="col-md-6 heading-section  text-center">
            <h2 class="mb-4">أحدث الحملات التطوعية</h2>
          </div>
        </div>
        <div class="row">
            @foreach ($Event as $Event)
            <div class="col-sm-3 col-md-4 ftco-animate " style="">
          	<div class="blog-entry align-self-stretch">
              <a href="#" class="block-20" style="background-image: url('images/event-1.jpg');">
              </a>
              
              <div class="text p-3 p-md-4 d-block text-right">
              	<div class="meta mb-3">
                  <div><a href="#">{{$Event-> Date}}</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mb-4"><a href="{{url("/viewe/$Event->id")}}">{{$Event-> Name}}</a></h3>
                <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> الفرناج</span></p>
                <p class="text-truncate" style="display:block ">{{$Event-> Description}}</p>
                <p><a href="event">انظم إلى الحملة <i class="ion-ios-arrow-forward"></i></a></p>
              </div>
            </div>
          </div>
              @endforeach
        </div>
      </div>
    </section>
@endsection