@extends('Layout.main')
@section('title','| عرض الملف الشخصي')
@section('content')


<body style = "background-color:#41B3A3">
    <div  class = "container " style = "padding-top:100px; padding-bottom:100px;">
        
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <div class="card-title mb-4">
                        <div class="d-flex justify-content-start">
                            <div class="image-container">
                                <img src="/images/user.png" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                <div class="middle">
                                    {{-- <input type="button" class="btn btn-secondary" id="btnChangePicture" value="Change" /> --}}
                                    <input type="file" style="display: none;" id="profilePicture" name="file" />
                                </div>
                            </div>
                            <div class="userData ml-3">
                                <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a>{{Auth::user()->name}}</a></h2>
                                {{-- <h6 class="d-block"><a href="javascript:void(0)">1,500</a> Video Uploads</h6>
                                <h6 class="d-block"><a href="javascript:void(0)">300</a> Blog Posts</h6> --}}
                            </div>
                            <div class="ml-auto">
                                <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <ul class="nav nav-tabs nav-fill mb-4" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">بياناتي</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="connectedServices-tab" data-toggle="tab" href="#connectedServices" role="tab" aria-controls="connectedServices" aria-selected="false">تبرعاتي</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="connectedEvents-tab" data-toggle="tab" href="#connectedEvents" role="tab" aria-controls="connectedEvents" aria-selected="false">حملاتي</a>
                                </li>
                            </ul>
                            <div class="tab-content ml-1" id="myTabContent">
                                <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                    

                                    <div class="row">
                                        <div class="col-sm-3 col-md-2 col-5">
                                            <label style="font-weight:bold;">الإسم</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            {{Auth::user()->name}}
                                        </div>
                                    </div>
                                    <hr />

                                    <div class="row">
                                        <div class="col-sm-3 col-md-2 col-5">
                                            <label style="font-weight:bold;">البريد الإلكتروني</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            {{Auth::user()->email}}
                                        </div>
                                    </div>
                                    <hr />
                                    
                                    
                                    <div class="row">
                                        <div class="col-sm-3 col-md-2 col-5">
                                            <label style="font-weight:bold;">عضو منذ</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            {{Auth::user()->created_at->toDateString()}}
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-sm-3 col-md-2 col-5">
                                            <label style="font-weight:bold;">أخر تعديل بالحساب</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            {{Auth::user()->updated_at->diffForHumans()}}
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-sm-3 col-md-2 col-5">
                                            <label style="font-weight:bold;">الصلاحيات</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            {{implode(' | ', Auth::user()->roles()->get()->pluck('name')->toArray())}}
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-sm-3 col-md-2 col-5">
                                        </div>
                                        <div class="col-md-8 col-6">
                                            {{-- <a href="{{ route('UserProfile.edit',Auth::user()-> id) }}"><button type="button" class="btn btn-primary float-left"> تعديل</button></a> --}}
                                            
                                            <form class="" action="{{url('/user/' . Auth::id() . '/edit')}}" method="Get">
                                                <input type="submit" class="col-3 btn btn-secondary btn-lg mt-1 mb-1" value="تعديل">
                                              </form>
                                        </div>
                                    </div>
                                    <hr />

                                </div>
                                <div class="tab-pane fade" id="connectedServices" role="tabpanel" aria-labelledby="ConnectedServices-tab">
                                    
                                    <table class="table">
                                        <thead>
                                            <tr>
                                              <th scope="col">رقم التبرع</th>
                                              <th scope="col">الإسم</th>
                                              <th scope="col">الوصف</th>
                                              <th scope="col">الحالة</th>
                                              <th scope="col">الصنف</th>
                                              <th scope="col">تعديل</th>
                                              <th scope="col">حذف</th>
                                            </tr>
                                          </thead>
                                        <tbody id="items">
                                            @foreach($userprod as $item)
                                                <tr>
                                                    <th scope="row">{{$item-> id}}</th>                                  
                                                    {{-- <td scope="col">{{$userprodCount}}</td>  --}}
                                                    <td scope="col">{{$item->name}}</td>
                                                    <td scope="col">{{$item->description}}</td>
                                                    <td scope="col">{{$item->status->name}}</td>
                                                    <td scope="col">{{$item->category->name}}</td>      
                                                    <td scope="col">
                                                    <form class="" action="{{url('/donation/' . $item->id) . '/edit'}}"
                                                        method="Get">
                                                        <input type="submit" class="btn btn-secondary float-left" value="تعديل">
                                                    </form>
                                                    </td>
                                                    <td scope="col">
                                                    <form action="{{ url('/donation/' . $item->id) }}"method="post" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="submit" value="مسح" class="btn btn-danger float-left">
                                                    </form>  
                                                    </td>        
                                                </tr>
                                                
                                                    @endforeach
                                        </tbody> 
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="connectedEvents" role="tabpanel" aria-labelledby="ConnectedEvents-tab">
                                    Coming Soon
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
</div>
</div>
</body>
@endsection