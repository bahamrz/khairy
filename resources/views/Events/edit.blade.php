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

<h1>Edit Event : {{$Event->Name}} </h1>

<div class="container">

    <form method="POST" enctype="multipart/form-data" action="{{url('/event/'. $Event->id)}}">

        @csrf
        @method('PATCH')

       <div>
          <label >Event Name </label>
          <input type="text" name="name" value="{{$Event->Name}}" placeholder="product Name">

      </div>
      <div>
            <label >product Description</label>
            <textarea name="description" placeholder="product Description">{{$Event->Description}}</textarea>

      </div>

      <div>
      <label >Organization Name</label>
        <select class="" name="category">
         @foreach ($Organization as $Org )
      
      <option  {{$Org->id == $Event->organization_id ? 'selected' : ''}} value="{{$Org->id}}" > {{$Org->Org_Name}}  </option>
          
      @endforeach
        </select>
<div>
          <label >Event time</label>
          <input type="date" name="date" placeholder="Event date" value="{{$Event->Date}}">

      </div>
      <div>
          <label >Event place</label>
          <input type="text" name="Place" placeholder="Event Place" value="{{$Event->Place}}">

      </div>
      </div>
      <div>       

      </div>
      <div>
              <label for="image" class="col-2 col-form-label">Image</label>
              <input type="file" id="image" name="image" class="form-control">
              @if ($Event->image)
                  <img src="{{  asset(Storage::url($Event->image)) }}" alt="" width="250">
              @endif
      </div>
      <div>

            <input type="submit" value="edit event">

      </div>
    </form>
    <form action="{{ url("/event/$Event->id") }}" method="post" style="display: inline;">
        @csrf
        @method('DELETE')

        <input type="submit" value="event Delete" class="btn btn-danger">
    </form>

 </div>

</body>
</html>
