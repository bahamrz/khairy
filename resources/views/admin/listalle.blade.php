@extends('Layout.main')
@section('title','| عرض كل التبرعات ')
@section('content')


<body style = "background-color:#0F4C81">
    <div  class = "container " style = "padding-top:100px; padding-bottom:100px;">
        
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title mb-4">
                        <div class="d-flex justify-content-start">

                            <div class="userData ml-3">
                                <h2 class="d-block text-center" style="font-size: 1.5rem; font-weight: bold"><a>عرض كل التبرعات</a></h2>
                            </div>
                            <div class="ml-auto">
                                <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                            </div>
                        </div>
                    </div>
{{-- *****************************    Start of Listing ***************************** --}}

<table class="table">
    <thead>
        <tr>
          <th scope="col">رقم الحملة</th>
          <th scope="col">إسم منشيء الحملة</th>
          <th scope="col">الإسم</th>
          <th scope="col">الوصف</th>
          <th scope="col">المكان</th>
          <th scope="col">تاريخ الإنشاء</th>
          <th scope="col">تعديل</th>
          <th scope="col">حذف</th>
        </tr>
      </thead>
    <tbody id="items">
        @foreach($eve as $item)
            <tr>
                <th scope="row">{{$item-> id}}</th>                                  
                <th scope="row">{{$item->Organization->Org_Name}}</th>        
                <td scope="col">{{$item->Name}}</td>
                <td scope="col">{{$item->Description}}</td> 
                <td scope="col">{{$item->Place}}</td>
                <td scope="col">{{$item->created_at->toDateString()}}</td>      
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
            </div>
        </div>
    </div>
</div>
</div>
</body>
@endsection