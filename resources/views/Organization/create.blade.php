@extends('Layout.main')
@section('title','| إنشاء منظمة جديدة')
@section('content')
<body style = "background-color:#41B3A3;">
  <div class = "container" style = "padding-top:100px; padding-bottom:100px;">
    <div class = "row justify-content-center">
      <div class = "col-md-12">
        <div class = "card py-300%">
          <div class = "card-header text-right">بيانات التبرع</div>
            <div class = "card-body">
              <form method = "POST" action = "{{route('neworganization')}}">
                @csrf
                  <div class = "input-group row py-10%">
                    {{-- <label >Organization Name</label> --}}
                      <input type = "text" class = "form-control" name = "Org_Name" placeholder = "إسم المنظمة" required>
                  </div>
                  <hr>
                  <div class = "input-group row py-10%">
                    {{-- <label >Organization Description</label> --}}
                    <textarea name = "Org_Desc" class = "form-control" placeholder = "وصف المنظمة" required></textarea>
                  </div>
                  <hr>
                  <div class = "input-group row py-10%">
                    <input type = "submit" class = "btn btn-primary offset-10" value = "إنشاء المنظمة">
                  </div>
                </form>
            </div>
          </div>
      </div>
    </div>
  </div>
</body>
@endsection
