@extends('Layout.main')
@section('title','| إنشاء حملة جديدة')
@section('content')
<body style = "background-color:#41B3A3;">
  <div class = "container" style = "padding-top:100px; padding-bottom:100px;">
    <div class = "row justify-content-center">
      <div class = "col-md-12">
        <div class = "card py-300%">
          <div class = "card-header text-right">بيانات التبرع</div>
            <div class = "card-body">
                @if ($errors->count())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
              <form method = "POST" action = "{{route('newevent')}}" enctype = "multipart/form-data">
                @csrf
                  <div class = "input-group row py-10%">
                    {{-- <label >Event Name</label> --}}
                      <input type = "text" class = "form-control" name = "name" placeholder = "إسم الحملة">
                  </div>
                  <hr>
                  <div class = "input-group row">
                    {{-- <label >Organization Name</label> --}}
                    <select class = "form-control" name = "organization_id" hint = "الرجاء إختيار المنظمة">
                      <option value = "none" disabled selected value>الرجاء إختيار المنظمة</option>
                        @foreach ($Organization as $Org )
                          <option value = "{{$Org->id}}" > {{$Org->Org_Name}}</option>
                        @endforeach
                    </select>
                  </div>
                  <hr>
                  <div class = "input-group row">
                    {{-- <label >Event time</label> --}}
                    <input type = "date" class = "form-control" name = "date" placeholder = "تاريخ الحملة">
                  </div>
                  <hr>
                  <div class = "input-group row">
                    {{-- <label >Event place</label> --}}
                    <input type = "text" class = "form-control" name = "Place" placeholder = "مكان الحملة">
                  </div>
                  <hr>
                  <div class = "input-group row">
                    {{-- <label >Event Description</label> --}}
                    <textarea name = "description" class = "form-control" placeholder = "وصف الحملة"></textarea>
                  </div>
                  <div class = "input-group row">
                    {{-- <label >Imag for Event </label> --}}
                    <hr>
                    {{-- <label  class="col-2 col-form-label">Image</label> --}}
                    <input type = "file" class = "form-control" id = "image" name = "image" class = "form-control">
                  </div>
                  <hr>
                  <div>
                    <input type = "submit" class = "btn btn-primary" value = "إنشاء الحملة">
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
@endsection
