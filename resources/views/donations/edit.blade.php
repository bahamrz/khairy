</<!DOCTYPE html>
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

<h1>edit product</h1>

<div class="container">

    <form method="POST" enctype="multipart/form-data" action="{{url('/donation/' . $product->id)}}">

        @csrf
          @method('PATCH')

       <div>
          <label >product Name</label>
          <input type="text" name="name" value="{{$product->name}}" placeholder="product Name">

      </div>
      <div>
            <label >product Description</label>
            <textarea name="description" placeholder="product Description">{{$product->description}}</textarea>

      </div>

      <div>
        <select class="" name="category">
          @foreach($category as $category)
          <option {{ $category->id == $product->category_id ? 'selected' : '' }} value="{{ $category->id}}"> {{ $category->name }}</option>
          @endforeach
        </select>

      </div>
      <div>
        <select class="" name="status">
          @foreach($status as $status)
          <option {{ $status->id == $product->status_id ? 'selected' : '' }} value="{{ $status->id}}"> {{ $status->name }}</option>
          @endforeach
        </select>

      </div>
      <div>
              <label for="image" class="col-2 col-form-label">Image</label>
              <input type="file" id="image" name="image" class="form-control">
              @if ($product->image)
                  <img src="{{  asset(Storage::url($product->image)) }}" alt="" width="250">
              @endif
      </div>
      <div>

            <input type="submit" value="edit product">

      </div>
    </form>
    <form action="{{ url("/donation/$product->id") }}" method="post" style="display: inline;">
        @csrf
        @method('DELETE')

        <input type="submit" value="Delete" class="btn btn-danger">
    </form>

 </div>

</body>
</html>
