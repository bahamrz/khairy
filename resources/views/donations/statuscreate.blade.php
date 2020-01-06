@extends('Layout.main')
@section('title','| إنشاء حالة جديدة')
@section('content')
<body style="background-color:#41B3A3">
    <div class="container " style="padding-top:100px; padding-bottom:100px;">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card py-300%">
                    <div class="card-header text-right">إنشاء حالة جديدة</div>
                        <div class="card-body">
                            <div class="container">
                                <form action="{{route('newstatus')}}" method="POST">
                                    @csrf
                                        <div class="row form-group">
                                            <label class="col-2 col-form-label float-right">إسم الحالة:</label>
                                                <div class="col-10">
                                                    <input type="text" name="name" class="form-control">
                                                </div>
                                        </div>
                                            <div class="row form-group">
                                                <input type="submit" value="إضافة" class="btn btn-primary offset-10">
                                            </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
