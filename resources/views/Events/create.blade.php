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

<h1>Create New Event</h1>

<div class="container">

    <form method="POST" action="{{route('newevent')}}">

        @csrf

       <div>
          <label >Event Name</label>
          <input type="text" name="name" placeholder="Event Name">

      </div>
      <select name="organization_id" >
      @foreach ($Organization as $Organization )
      
      <option value="{{$Organization->Org_Id}}" > {{$Organization->Org_Name}}  </option>
          
      @endforeach
      </select>
      <div>
          <label >Event time</label>
          <input type="date" name="date" placeholder="Event date">

      </div>
      <div>
          <label >Event place</label>
          <input type="text" name="Place" placeholder="Event Place">

      </div>
      <div>
            <label >Event Description</label>
            <textarea name="description" placeholder="Event Description"></textarea>

      </div>
      <div>

            <input type="submit" value="Make Event">

      </div>

    </form>

 </div>

</body>
</html>
