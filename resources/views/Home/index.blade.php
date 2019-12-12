@extends('Layout.main')
@section('title','| الرئيسية')
@section('content')

<div class="hero-wrap" style="background-image: url('images/bg001.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">الخير بالجميع وللجميع</h1>
            <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">مودة  | تعاون |  عطاء </p>

            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="/signin" class="btn btn-white btn-outline-white px-4 py-3 "><span class="icon-person mr-2"></span>أنظم الان</a></p>
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
     <section class=" bg-light">
    	<div class="container-fluid">
    		<div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-5 heading-section  text-center">
            <h2 class="mb-4">التبرعات</h2>
            <p>اخر التبرعات المنشورة على خيري</p>
          </div>
        </div>
    		<div class="row">
          <div class="col-sm-3">            <div class="item">
	    					<div class="cause-entry">
		    					<a href="#" class="img" style="background-image: url(images/t1.jpg);"></a>
		    					<div class="text p-3 p-md-4 text-right">
		    						<h3><a href="#">اثاث مستعمل</a></h3>
		    						<p>متوفر لدي بعض من الاثاث المستعمل يستطيع اخده من في حاجه له </p>
		    						<span class="donation-time mb-3 d-block">ينتهي خلال 3 ايام</span>
		                <div class="progress custom-progress-success">
		                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
		                </div>
		                <span class="fund-raised d-block">عدد الطلبات  (8)</span>
		    					</div>
                </div>
	    				</div>
           </div>
           <div class="col-sm-3">            <div class="item">
            <div class="cause-entry">
              <a href="#" class="img" style="background-image: url(images/t2.jpg);"></a>
              <div class="text p-3 p-md-4 text-right">
                <h3><a href="#">توصيل مجاني</a></h3>
                <p>يمكنني التوصيل مجانا لجميع مرضى السكر و الكلى من و إلى المستشفى خلال فترة النهار </p>
                <span class="donation-time mb-3 d-block"> غير محدود</span>
                <div class="progress custom-progress-success">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="fund-raised d-block">عدد الطلبات  (3)</span>
              </div>
            </div>
          </div>
       </div>
       <div class="col-sm-3">            <div class="item">
        <div class="cause-entry">
          <a href="#" class="img" style="background-image: url(images/cause-1.jpg);"></a>
          <div class="text p-3 p-md-4 text-right">
            <h3><a href="#">تدريس مجاني</a></h3>
            <p>بأمكاني التدريس مجانا لطلبة من الصف الأول إلى الخامس في مادة الحساب لمن يحتاج</p>
            <span class="donation-time mb-3 d-block">ساعة يوميا</span>
            <div class="progress custom-progress-success">
              <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <span class="fund-raised d-block">عدد الطلبات  (7)</span>
          </div>
        </div>
  
      </div>
   </div>
   <div class="col-sm-3">            <div class="item">
    <div class="cause-entry">
      <a href="#" class="img" style="background-image: url(images/t3.jpg);"></a>
      <div class="text p-3 p-md-4 text-right">
        <h3><a href="#">سيارة مستعملة</a></h3>
        <p> لدي سيارة مستعملة يمكن تسليمها لمن بحاجه لها مع العلم انها تحتاج الى بعض الصيانة</p>
        <span class="donation-time mb-3 d-block">ينتهي خلال 7 ايام</span>
        <div class="progress custom-progress-success">
          <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <span class="fund-raised d-block">عدد الطلبات  (1)</span>
    </div>

  </div>
</div>                 
	    				
	    				
    				</div>
    			</div>
    		</div>
    	</div>
    </section>     -->

 

    <section class=" bg-primary">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">أحدث الحملات التطوعية</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="#" class="block-20" style="background-image: url('images/event-1.jpg');">
              </a>
              <div class="text p-4 d-block text-right">
              	<div class="meta mb-3">
                  <div><a href="#">Sep. 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mb-4"><a href="#">زيارة أطفال الرعاية </a></h3>
                <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> الفرناج</span></p>
                <p>زيارة الاطفال والوقوف على احتياجاتهم </p>
                <p><a href="event">انظم إلى الحملة <i class="ion-ios-arrow-forward"></i></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="#" class="block-20" style="background-image: url('images/event-2.jpg');">
              </a>
              <div class="text p-4 d-block text-right">
              	<div class="meta mb-3">
                  <div><a href="#">Sep. 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mb-4"><a href="#">تبرعات للمهجرين</a></h3>
                <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> تاجوراء</span></p>
                <p>تبرع من أجل العائلات المهجرة من منازلها</p>
                <p><a href="event">إنضم للحملة <i class="ion-ios-arrow-forward"></i></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="#" class="block-20" style="background-image: url('images/event-3.jpg');">
              </a>
              <div class="text p-4 d-block text-right">
              	<div class="meta mb-3">
                  <div><a href="#">Sep. 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mb-4"><a href="#">تبرعات للمهاجرين الغير شرعيين</a></h3>
                <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> غوط الشعال</span></p>
                <p>العديد من الأفارقة يتسعملون ليبيا كمنفذ للهجرة الى اوروبا ساعد في إنقاذهم</p>
                <p><a href="event">إنضم للحملة<i class="ion-ios-arrow-forward"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section-3 img" style="background-image: url(img/bg_3.jpg);">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex">
    		<div class="col-md-6 d-flex ftco-animate">
    			<div class="img img-2 align-self-stretch" style="background-image: url(img/contact-us.png);"></div>
    		</div>
    		<div class="col-md-6 volunteer pl-md-5 ftco-animate text-right">
    			<h3 class="mb-3 text-right font">تواصل معنا</h3>
    			<form action="#" class="volunter-form">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="الإسم*">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="البريد الإلكتروني*">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="الرسالة*"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="إرسال" class="btn btn-white py-3 px-5 ">
            </div>
          </form>
    		</div>    			
    		</div>
    	</div>
    </section>



@endsection