@extends('Layout.main')
@section('title','| إدارة المستخدمين')

@section('content') 
    
<body style="background-color:#41B3A3">
    <div class="container " style="padding-top:100px; padding-bottom:100px;">
    <div class="row justify-content-center">
        <div class="col-md-12"> 
            <div class="card py-300%">
                <div class="card-header text-right">المستخدمين</div>

                <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">الإسم</th>
                                    <th scope="col">البريد الإلكتروني</th>
                                    <th scope="col">الصلاحيات</th>
                                    <th scope="col">إدارة الحساب</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                            
 
                                    <tr>
                                        <th scope="row">{{$user-> id}}</th>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{implode(' | ', $user->roles()->get()->pluck('name')->toArray())}}</td>
                                        <td>
                                            <a href="{{ route('users.edit',$user-> id) }}"><button type="button" class="btn btn-primary float-left"> تعديل</button></a>
                                          
                                          <form action="{{ route('users.destroy', $user-> id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-warning float-left">حذف </button>

                                          </form>
                                            {{-- <a href="{{ route('users.destroy',$user->id) }}"><button type="button" class="btn btn-warning ">حذف </button></a> --}}
                                          
                                            {{-- <button type="button" class="btn btn-success float-right ">مشعارف</button> --}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                              </table>
                </div>

            </div>
        </div>
    </div>
</div>

    <div class="container " style="padding-top:10px; padding-bottom:10px;">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card py-300%">
                <div class="card-header text-right">التبرعات</div>
                <div class="card-body">
                    <div class="form-group row py-15%">
                      <div class="col-md-12">
                        <a href="/category/create" ><button type="submit" class="btn btn-lg btn-warning float-left col-4 mx-10px">انشاء كاتوقري </button></a>
                        <a href="/productstatus/create"><button type="submit" class="btn btn-success btn-lg float-left col-4 mx-10px">انشاء حالة التبرع </button></a>
                        <a href="/admin/listall"><button type="submit" class="btn btn-info btn-lg float-left col-4 mx-10px">عرض كل التبرعات </button></a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>


    <div class="container " style="padding-top:10px; padding-bottom:10px;">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card py-300%">
                <div class="card-header text-right">الحملات</div>
                <div class="card-body">
                    <div class="form-group row py-15%">
                      <div class="col-md-12">
                        <a href="/organization/create"><button type="submit" class="btn btn-lg btn-warning float-left col-4 mx-10px">انشاء منظمة جديدة </button></a>
                        <a href="/organization"><button type="submit" class="btn btn-success btn-lg float-left col-4 mx-10px">عرض كل المنظمات </button></a>
                        <a href="/admin/listalle"><button type="submit" class="btn btn-info btn-lg float-left col-4 mx-10px">عرض كل الحملات </button></a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


</body>











@endsection