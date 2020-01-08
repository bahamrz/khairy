@extends('Layout.main')
@section('title', '| تعديل الحملة')
@section('content') 
<body style = "background-color:#41B3A3;">
  <div class = "container" style = "padding-top:100px; padding-bottom:100px;">
    <div class = "row justify-content-center">
      <div class = "col-md-12">
        <div class = "card py-300%">
          <div class = "card-header text-right">بيانات الحملة</div>
            <div class = "card-body">
              <form method="POST" enctype="multipart/form-data" action="{{url('/event/'. $Event->id)}}">
                @csrf
                  @method('PATCH')
                    <div class = "input-group row py-10%">
                      {{-- <label >Event Name </label> --}}
                        <input type="text" name="name" class = "form-control" value="{{$Event->Name}}" placeholder="إسم الحملة">
                    </div>
                    <hr>
                    <div class="input-group row">
                      {{-- <label >product Description</label> --}}
                      <textarea name="description" class = "form-control" placeholder="وصف الحملة">{{$Event->Description}}</textarea>
                    </div>
                    <hr>
                    <div class="input-group row">
                      {{-- <label >Organization Name</label> --}}
                      <select name="organization_id" class = "form-control">
                        @foreach ($Organization as $Org )
                          <option  {{$Org->id == $Event->organization_id ? 'selected' : ''}} value="{{$Org->id}}" > {{$Org->Org_Name}}  
                          </option>
                        @endforeach
                      </select>
                    </div>
                    <hr>
                    <div class="input-group row">
                      {{-- <label >Event time</label> --}}
                      <input type="date" class = "form-control" name="date" placeholder="تاريخ الحملة" value="{{$Event->Date}}">
                    </div>
                    <hr>
                    <div class="input-group row">
                      {{-- <label >Event place</label> --}}
                      <input type="text" name="Place" class = "form-control" placeholder="مكان الحملة" value="{{$Event->Place}}">
                    </div>
                    <hr>
                    <div class="input-group row">
                      {{-- <label for="image" class="col-2 col-form-label">Image</label> --}}
                      <input type="file" id="image" name="image" class="form-control">
                        @if ($Event->image)
                          <img src="{{  asset(Storage::url($Event->image)) }}" alt="" width="250">
                        @endif
                    </div>
                    <hr>
                    <div>
                      <input class = "btn btn-primary btn-lg btn-block" type="submit" value="تعديل الحملة">
                    </div>
                  </form>
                  <hr>
              <form action="{{ url("/event/$Event->id") }}" method="post" style="display: inline;">
                @csrf
                  @method('DELETE')
                    <input type="submit" class = "btn btn-block btn-danger btn-lg" value="مسح الحملة">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
@endsection