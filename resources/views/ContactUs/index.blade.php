@extends('Layout.main')
@section('title','| تواصل معنا')
@section('content')

 <!-- **** Contact Form Styled with CSS External File **** -->
 <div class="container contact-form" id="baha-contactfrm">
      <div class= "contact-image" id="baha-contactimg">
        <img src="images/contacts_us.png">
      </div>
      <form action="/Contactus" method="POST">
      @csrf
        <h3>تـواصل مـعنا</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="bahaarea" placeholder="الرسالة*" required style="width:100%; height:300px; text-align:right" name="message"></textarea>
                </div>
              </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" class="form-control " placeholder="الإسم*" required style="text-align:right" name="name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="البريد الإلكتروني*" required style="text-align:right" name="email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="رقم الهاتف*" required style="text-align:right" name="phonenumber">
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-warning btn-lg btn-block" value="إرسال" >
            </div>
          </div>
        </div>
      </form>
</div>
<!-- End of Contact Form Code -->


@endsection