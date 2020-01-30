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
          @if(count($errors)>0)
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<ul>
							@foreach ($errors->all() as $error)
							<li>* {{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif
					@if($message = Session::get('success'))
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<p>{{ $message }}</p>
					</div>
					@endif
    			<form action="{{route('sendMessage')}}" method="post" class="volunter-form">
            @csrf
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="اسمك">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="email" placeholder="بريدك الأكتروني">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="phoneNumber" placeholder="رقم هاتفك">
            </div>
            <div class="form-group">
              <textarea id="" cols="30" rows="3" name="message" class="form-control" placeholder="اكتب رسالتك هنا"></textarea>
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
