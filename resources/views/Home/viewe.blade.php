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
                     عدد المشاركات : {{DB::table('Participations')->select('user_id')->where('even_id','=',$event->id)->count()}}
                     </div>
                  </div>
                @if (Auth::id() == 1) 
                 {{-- ما يشبحها إلا الادمن 1  --}}
                  <div class="card">
                    <div class="card-body" {{$Usersdonation=DB::table('Participations')->select('user_id')->where('even_id','=',$event->id)->get()}}>
                     قائمة بالاعضاء الراغبين في المشاركة  :
                           @foreach ($Usersdonation as $Userdonation)
                               <div {{$usersname=DB::table('users')->select('name')->where('id','=',$Userdonation->user_id)->get()}}>
                                @foreach ($usersname as $username)
                                 {{$username->name}}
                                 @endforeach
                                 </div>
                            @endforeach
                    </div>
                  </div>
                  @endif
                  <div class="card">
                      <div class="card-body">
                          {{$event-> Description}}
                        </div>
                    </div>
                  </div>
                  @if($event->image == null)
                  {{-- الصوره الدفالت تطلع بيضة ما اعرفتش علاش لذلك إلغاتها  --}}
                  {{-- لاكن تطلع صح في الاندكس  --}}
                    {{-- <img src="/images/love.jpg" alt=" defult img " class="img-thumbnail"> --}}
                    {{-- <a  class="-20" style="background-image: url('images/love.jpg');"></a> --}}
                    {{-- <img src="/images/love.jpg" class="img-fluid" alt="Responsive image"> --}}
                   @else
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body rounded border border-light text-right">
                              <img src="{{ asset(Storage::url($event->image))}}" alt="..." class="img-thumbnail">
                            </div>
                        </div>
                      </div>
                   @endif
                 </div {{$see=false}} {{$UsersInEvent=DB::table('Participations')->select('user_id')->where('even_id','=',$event->id)->get()}}>      
                  @foreach ($UsersInEvent as $UserInEvent)                
                    @if($UserInEvent->user_id == Auth::id())
                      <div {{$see=true}}></div>
                    @endif     
                  @endforeach                    
                  @if($see) 
                    <form class="" action="{{ url("/event/participation/$event->id") }}" method="post">
                      @csrf
                      @method('DELETE')
                      <input type="submit" class="col-3 btn btn-info btn-lg mt-1 mb-1" value="الغاء مشاركة">
                    </form>
                  @else
                    <p><form class="" action="{{ url('/event/participation/'. $event->id) }}" method="post">
                        @csrf
                        <input type="submit" class="col-3 btn btn-info btn-lg mt-1 mb-1" value="مشاركة">
                    </form></p>
                  @endif
          @if (Auth::id() == 1) 
        {{-- ما يشبحها إلا الادمن 1  --}}
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