{{-- </<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

</head>
<body>

<h1>Create New product</h1> --}}

@extends('Layout.main')
@section('title', '| إنشاء تبرع جديد')


@section('content')

<body style="background-color:#41B3A3;">

<div class="container " style="padding-top:100px; padding-bottom:100px;">
  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card py-300%">
              <div class="card-header text-right">بيانات التبرع</div>

              <div class="card-body">
                @if ($errors->count())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

      <form method="POST" enctype="multipart/form-data" action="{{route('actionstore')}}">
        @csrf
        <div>
          {{-- <label class="col-md-2 col-form-label text-md-right">إسم التبرع</label> --}}
          <div class="form-group row py-10%">
          <input type="text" class="form-control" name="name" placeholder="اسم المنتج">
          </div>
        </div>
        <div>
          {{-- <label >product Description</label> --}}
          <textarea name="description" class="form-control" placeholder="وصف المنتج"></textarea>

        </div>

        <div>
          <label for="category" class="col-md-2 col-form-label text-md-right">النوع</label>
          <select class="form-control" name="category">
            <option value = "none" disabled selected value>الرجاء إختيار صنف</option>
            @foreach($category as $category)
            <option value="{{ $category->id}}" > {{ $category->name }}</option>
            @endforeach
          </select>
        </div>
        <div>
          <label for="status" class="col-md-2 col-form-label text-md-right">حالة المنتج</label>
          <select class="form-control" name="status">
            <option value = "none" disabled selected value>الرجاء إختيار حالة</option>
            @foreach($status as $status)
            <option value="{{ $status->id}}"> {{ $status->name }}</option>
            @endforeach
          </select>

        </div>
        <div>
          <label for="image" class="col-2 col-form-label py-5px">الصورة</label>
          <input type="file" id="image" name="image" class="form-control">
        </div>
        <div>

          <div class="col-md-12">
          <input type="submit" class="btn btn-success" value="إنشاء التبرع">
          </div>

        </div>
      </form>

</div>
</div>
</div>
</div>
</div>
</body>
@endsection
