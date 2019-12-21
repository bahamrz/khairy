@extends('Layout.main')
@section('title','| تسجيل الدخول')
@section('content')

<body style="background-color:#41B3A3">
<!-- SignUP Page -->

        <div class="container"style="padding-top:100px;">
          <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
              <div class="card card-signin my-5">
                <div class="card-body">
                  <h3 class="card-title text-center">تسجيل الدخول</h3>
                  <form method="POST" class="form-signin" action="{{ route('login')}}">
                    @csrf
                    <div class="form-label-group">
                      <input type="email" id="email" class="form-control @error('email') is-invalid @enderror " placeholder="البريد الإلكتروني" name="email" style="text-align:right" required autocomplete="email" autofocus>
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    <div class="form-label-group">
                      <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="كلمة المرور" style="margin-top:10px; text-align:right" name="password" required autocomplete="current-password">
                      @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="remember" name="remember"  {{ old('remember') ? 'checked' : '' }}>
                      <label class="form-check-label" for="remember" style="display: inline-block; width: 300px; text-align: right;" >تذكرني</label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" style="background-color: #05386B;" type="submit">تسجيل الدخول</button>
                    <a class="d-block text-center mt-2 small" href="/register" >تسجيل حساب جديد</a>
                    @if (Route::has('password.request'))
                      <a class="btn btn-link" href="{{ route('password.request') }}">
                          هل نسيت كلمة المرور؟
                      </a>
                    @endif
                    <!-- <hr class="my-4">
                    <button class="btn btn-lg btn-danger btn-block text-uppercase" type="submit"> تسجيل الدخول بحساب قوقل <i class="fa fa-google mr-2"></i></button>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit"> تسجيل الدخول بحساب فيسبوك<i class="fa fa-facebook-f mr-2"></i></button> -->
                    
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
<!-- End of sign up page -->
</body>
@endsection
