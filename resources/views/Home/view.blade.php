@extends('Layout.main')
@section('title', '| عرض التبرعات ')
@section('content')
<body style="background-color:darkgreen; direction:rtl;">
<div class="container text-right " style="margin-top:15%; margin-bottom:10%; background-color:black; " >
        <div>
          <h1 style="color:white;" class="text-right">{{$product-> name}}</h1>
          <p class="lead"><i class="far fa-calendar-alt"></i> {{$product-> updated_at-> diffforhumans()}} </p>
        </div>
        <div class="row">
          <div class="col-md-6">
                <div class="card">
                    <div class="card-body"><i class="fas fa-user"></i>
                      تم النشر بواسطة:
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                      {{$product-> created_at-> diffforhumans()}}
                    </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          {{$product-> description}}
                        </div>
                    </div>
                  </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body rounded border border-light text-right">
                              <img src="{{ asset($product->image) }}" alt="..." class="img-thumbnail">
                            </div>
                        </div>
                      </div>

        </div>
        <input type="submit" class="col-3 btn btn-info btn-lg mt-1 mb-1" value="المشاركة">
        <input type="submit" class="col-3 btn btn-secondary btn-lg mt-1 mb-1" value="تعديل">
        <input type="submit" class="col-3 btn btn-danger btn-lg mt-1 mb-1" value="حذف">

</div>

</body>
@endsection
