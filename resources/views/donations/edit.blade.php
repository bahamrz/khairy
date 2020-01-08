@extends('Layout.main')
@section('title','| تعديل التبرع')
@section('content')
<body style = "background-color:#41B3A3;">
  <div class = "container" style = "padding-top:100px; padding-bottom:100px;">
    <div class = "row justify-content-center">
      <div class = "col-md-12">
        <div class = "card py-300%">
          <div class = "card-header text-right">بيانات التبرع</div>
            <div class = "card-body">  
              <div class="container">
                <form method="POST" enctype="multipart/form-data" action="{{url('/donation/' . $product->id)}}">
                  @csrf
                  @method('PATCH')
                    <div class = "input-group row py-10%" > 
                      <label class="col-sm-2 col-form-label">إسم التبرع:</label>
                      <input type="text" name="name" class = "form-control" value="{{$product->name}}" placeholder="product Name">
                    </div>
                    <hr>
                    <div class = "input-group row">
                      <label class="col-sm-2 col-form-label">الوصف:</label>
                      <textarea name="description" class = "form-control" placeholder="product Description">{{$product->description}}</textarea>
                    </div>
                    <hr>
                    <div class = "input-group row">
                      <label class="col-sm-2 col-form-label">الصنف:</label>
                      <select name="category" class = "form-control">
                        @foreach($category as $category)
                          <option {{ $category->id == $product->category_id ? 'selected' : '' }} value="{{ $category->id}}"> {{ $category->name }}</option>
                        @endforeach
                      </select>
                    </div>
                    <hr>
                    <div class = "input-group row">
                      <label class="col-sm-2 col-form-label">الحالة:</label>
                      <select  name="status" class = "form-control">
                        @foreach($status as $status)
                          <option {{ $status->id == $product->status_id ? 'selected' : '' }} value="{{ $status->id}}"> {{ $status->name }}</option>
                        @endforeach
                      </select>
                    </div>
                    <hr>
                    <div class = "input-group row">
                      <label for="image" class="col-sm-2 col-form-label">الصورة</label>
                      <input type="file" id="image" name="image" class="form-control">
                      @if ($product->image)
                        <img src="{{  asset(Storage::url($product->image)) }}" alt="" width="250">
                      @endif
                    </div>
                    <hr>
                    <div>
                      <input type="submit" class="btn btn-success btn-lg btn-block" value="تعديل التبرع">
                    </div>
                </form>
                <hr>
                <form action="{{ url("/donation/$product->id") }}" method="post" style="display: inline;">
                  @csrf
                  @method('DELETE')
                  <input type="submit" value="مسح التبرع" class="btn btn-lg btn-block btn-danger">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
</body>


@endsection