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
                  <form class="form-signin">
                    <div class="form-label-group">
                      <input type="email" id="inputEmail" class="form-control" placeholder="البريد الإلكتروني" style="text-align:right" required autofocus>
                    </div>
                    <div class="form-label-group">
                      <input type="password" id="inputPassword" class="form-control" placeholder="كلمة المرور" style="margin-top:10px; text-align:right" required>
                    </div>
                    <div class="custom-control custom-checkbox mb-3">
                      <input type="checkbox" class="custom-control-input" id="customCheck1">
                      <label class="custom-control-label" style="display: inline-block; width: 300px; text-align: right;" >تذكرني</label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" style="background-color: #05386B;" type="submit">تسجيل الدخول</button>
                    <a class="d-block text-center mt-2 small" href="/signup" >تسجيل حساب جديد</a>
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
