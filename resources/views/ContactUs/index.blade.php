@extends('Layout.main')
@section('title','| يسعدنا تواصلك معنا')
@section('content')
<body style="background-color:#5ac18a">
    <section class="ftco-section-3 img" style="background-image: url(img/bg_3.jpg);">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex">
          <div class="col-md-6 d-flex ftco-animate">
            <div class="img img-2 align-self-stretch" style="background-image: url(img/contact-us.png);"></div>
          </div>
    		<div class="col-md-6 volunteer pl-md-5 ftco-animate">
    			<h3 class="mb-3 text-right">تواصل معنا</h3>
    			<form action="#" class="volunter-form">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="اسمك">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="بريدك الأكتروني">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="رقم هاتفك">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="اكتب رسالتك هنا"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="ارسل" class="btn btn-white py-3 px-5 text-right">
            </div>
          </form>
    		</div>    			
    		</div>
    	</div>
    </section>
</body>
@endsection