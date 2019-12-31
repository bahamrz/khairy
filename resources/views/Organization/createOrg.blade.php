@extends('Layout.main')
@section('title','| إنشاء منظمة جديدة')
@section('content')
    
<body style="background-color:#41B3A3;">


  <div class="container" style="padding-top:100px; padding-bottom:100px;">
  
    <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card py-300%">
              <div class="card-header text-right">بيانات التبرع</div>
  
              <div class="card-body">
        
      <form method="POST" action="{{route('storeInDB')}}">
        
        @csrf
        
        <div>
          <label >Organization Name</label>
          <input type="text" name="name" placeholder=" Organization Name">
          
        </div>
        <div>
          <label >Organization Description</label>
          <textarea name="description" placeholder="Organization Description"></textarea>
          <label >still to add logo and contacts in DB</label>
        </div>
        <div>
          
          <input type="submit" value="Add Orginzation">
          
        </div>
        
      </form>
      
          </div>
          </div>
      </div>
    </div>
  </div>

</body>

@endsection