@extends('Layout.main') 
@section('title', '| عرض الحملات ')

@section('content')
<body style="background-color:darkgreen; direction:rtl;">
<div class="container text-right " style="margin-top:15%; margin-bottom:10%; background-color:black; " >
        <div>
          <h1 style="color:white;" class="text-right">{{$event-> Name}}</h1>
          <p class="lead"><i class="far fa-calendar-alt"></i> {{$event-> updated_at-> diffforhumans()}} </p>
        </div>
        <div class="row">
            
          <div class="col-md-6">
                <div class="card">
                    <div class="card-body"><i class="fas fa-user"></i>
                      تم النشر بواسطة: {{$event->Organization->Org_Name}}
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                      {{$event-> created_at-> diffforhumans()}}
                    </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          {{$event-> Description}}
                        </div>
                    </div>
                  </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body rounded border border-light text-right">
                              <img src="{{ asset(Storage::url($event->image))}}" alt="..." class="img-thumbnail">
                            </div>
                        </div>
                      </div>
          
        </div>
        @if (Auth::id() == $event->organization_id) 
          <form class="" action="{{url('#')}}" method="get">
            <input type="submit" class="col-3 btn btn-info btn-lg mt-1 mb-1" value="المشاركة">
          </form>
          <form class="" action="{{url('/event/' . $event->id) . '/edit'}}" method="Get">
            <input type="submit" class="col-3 btn btn-secondary btn-lg mt-1 mb-1" value="تعديل">
          </form>
          <form class="" action="{{ url('/event/' . $event->id) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" class="col-3 btn btn-danger btn-lg mt-1 mb-1" value="حذف">
          </form>
        @endif
</div>

</body>
@endsection