@extends('Layout.main')
@section('title','| تسجيل حساب جديد')
@section('content')
<!-- SignUP Page -->
<section style="background-image: url(img/hhh.jpg);">
<body>
        <div class="container" style="padding-top:100px;">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-xl-5 mx-auto">
              <div class="card card-signin flex-row my-5">
                <div class="card-img-left d-none d-md-flex">
                   <!-- Background image for card set in CSS! -->
                </div>
                <div class="card-body">
                  <h3 class="card-title text-center" >تسجيل حساب جديد</h3>
                <form class="form-signin" method="POST" action="{{route('register')}}">
                  @csrf
                    <div class="form-label-group">
                      <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="إسم المستخدم" style="text-align:right; margin-top:10px;">
                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-label-group">
                      <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="البريد الإلكتروني" style="text-align:right; margin-top:10px;">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <hr>
                    <div class="form-label-group">
                      <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="الرمز السري" style="text-align:right; margin-top:10px;">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-label-group">
                      <input type="password" id="password-confirm" class="form-control" placeholder="تأكيد الرمز السري" name="password_confirmation" style="text-align:right; margin-top:10px;" required autocomplete="new-password">
                    </div>
                    <button class="btn btn-lg btn-primary btn-block " type="submit" style="background-color: #6b2568;" margin-top:10px;">تسجيل</button>
                    <a class="d-block text-center mt-2 small" href="/login" >تسجيل الدخول</a>
                    <!-- <hr class="my-4">
                    <button class="btn btn-lg btn-danger btn-block " type="submit">   تسجيل الدخول بحساب قوقل <i class="fa fa-google mr-2"></i></button>
                    <button class="btn btn-lg btn-primary btn-block " type="submit"> تسجيل الدخول بحساب فيسبوك<i class="fa fa-facebook-f mr-2"></i></button> -->
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
<!-- End of sign up page -->
</body>
@endsection