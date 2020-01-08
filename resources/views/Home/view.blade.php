@extends('Layout.main')
@section('title', '| عرض التبرعات ')
@section('content')
<body style="background-color:#41B3A3; direction:rtl;">

{{-- <div class="container text-right " style="margin-top:15%; margin-bottom:10%; " > --}}
  <div class = "container text-right" style = "padding-top:100px; padding-bottom:100px;">
    <div class = "row justify-content-center">
      <div class = "col-md-12">
        <div class = "card py-300%">
          {{-- <div class = "card-header text-right">بيانات التبرع</div> --}}
            <div class = "card-body">  
              <div class="container">
        <div>
          <h1 style="color:black;" class="text-center">{{$product-> name}}</h1>
          <p class="lead"><i class="far fa-calendar-alt"></i>أخر تعديل: {{$product-> updated_at-> diffforhumans()}} </p>
        </div>
        <div class="row">
          <div class="col-md-6">
                <div class="card">
                    <div class="card-body"><i class="fas fa-user"> </i>
                      تم النشر بواسطة:  {{$product->creator->name}}
                    </div>
                </div>
                <hr>
                <div class="card">
                    <div class="card-body"><i class="fas fa-pen"></i>
                      تم إنشاءه : {{$product-> created_at-> diffforhumans()}}
                    </div>
                  </div>
                <hr>
                <div class="card">
                      <div class="card-body">
                        وصف التبرع:  {{$product-> description}}
                        </div>
                    </div>
                    @if (Auth::id() == $product-> user_id)
                    <div class="card">
                      <div class="card-body" {{$Usersdonation=DB::table('donation_resarvations')->select('user_id')->where('PRODUCT_ID','=',$product->id)->get()}}>
                      قائمة بالاعضاء الذين قامو بالحجز  :
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
                  </div>
                  @if($product->image == null)                             
                    {{-- <img src="/images/love.jpg" alt=" defult img " class="img-thumbnail"> --}}
                    {{-- <a  class="-20" style="background-image: url('images/love.jpg');"></a> --}}
                    {{-- <img src="/images/love.jpg" class="img-fluid" alt="Responsive image"> --}}
                   @else
                      <div class="col-md-6">
                        <div class="card">
                          <div class="card-body rounded border border-light text-right">
                                <img src="{{ asset(Storage::url($product->image))}}" class="img-thumbnail">
                                </div>
                             </div>
                         </div>
                   @endif
                          
                     </div {{$see=false}}{{ $Usersdonation=DB::table('donation_resarvationS')->select('user_id')->where('PRODUCT_ID','=',$product->id)->get()}}>       
                 @foreach ($Usersdonation as $Userdonation)                            
                    @if($Userdonation->user_id == Auth::id())
                      <div {{$see=true}}></div>
                    @endif    
                 @endforeach
                  @if($see) 
                  <p><form class="" action="{{  url('/product/resarvation/'. $product->id) }}" method="post">
                      @csrf
                      @method('DELETE')              
                      <input type="submit" class="col-3 btn btn-info btn-lg mt-1 mb-1" value="الغاء الحجز"> 
                    </form></p>
                  @elseif(Auth::id() == $product->user_id)                  
                  @else
                  <p><form class="" action="{{ url('/product/resarvation/'. $product->id) }}" method="post">
                        @csrf                        
                      <input type="submit" class="col-3 btn btn-info btn-lg mt-1 mb-1" value="حجز">                         
                    </form></p>
                    @endif

        @if (Auth::id() == $product-> user_id)
        <form class="" action="{{url('/donation/' . $product->id) . '/edit'}}" method="Get">
          <input type="submit" class="col-4 btn btn-secondary btn-lg mt-1 mb-1 float-right btn-block" value="تعديل">
        </form>
        <form class="" action="{{ url('/donation/' . $product->id) }}" method="post">
          @csrf
          @method('DELETE')
          <input type="submit" class="col-4 btn btn-danger btn-lg mt-1 mb-1 float-right btn-block" value="حذف">
        </form>
        @endif
      </div>
</div>
</div>
</div>
</div>
</div>
</div>


</body>
@endsection
