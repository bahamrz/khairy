@extends('Layout.main')
@section('title','| تسجيل حساب جديد')
@section('content')
<!-- SignUP Page -->
<body style="background-color:#41B3A3">
        <div class="container" style="padding-top:100px;">
          <div class="row">
            <div class="col-lg-10 col-xl-9 mx-auto">
              <div class="card card-signin flex-row my-5">
                <div class="card-img-left d-none d-md-flex">
                   <!-- Background image for card set in CSS! -->
                </div>
                <div class="card-body">
                  <h3 class="card-title text-center">تسجيل حساب جديد</h3>
                  <form class="form-signin">
                    <div class="form-label-group">
                      <input type="text" id="inputUserame" class="form-control" placeholder="إسم المستخدم" style="text-align:right; margin-top:10px;" required autofocus>
                    </div>
                    <div class="form-label-group">
                      <input type="email" id="inputEmail" class="form-control" placeholder="البريد الإلكتروني" style="text-align:right; margin-top:10px;" required>
                    </div>
                    <hr>
                    <div class="form-label-group">
                      <input type="password" id="inputPassword" class="form-control" placeholder="الرمز السري" style="text-align:right; margin-top:10px;" required>
                    </div>
                    <div class="form-label-group">
                      <input type="password" id="inputConfirmPassword" class="form-control" placeholder="تأكيد الرمز السري" style="text-align:right; margin-top:10px;" required>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block " type="submit" style=" background-color:#05386B; margin-top:10px;">تسجيل</button>
                    <a class="d-block text-center mt-2 small" href="signup.html" >تسجيل الدخول</a>
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