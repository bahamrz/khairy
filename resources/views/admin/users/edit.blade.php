@extends('Layout.main')
@section('title','| إدارة المستخدمين')

@section('content')
    
<body style="background-color:#41B3A3">
    <div class="container " style="padding-top:100px; padding-bottom:100px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card py-300%">
                <div class="card-header text-right"> {{$edituser-> name}}</div>

                <div class="card-body">


                  <form method="POST" action =" {{route('users.update', $edituser-> id)}} " >
                    @method('PATCH')
                    @csrf

                    {{-- //Start of edit Email field --}}
                    <div class="form-group row py-10%">
                        <label for="roles" class="col-md-2 col-form-label text-md-right">البريد الالكتروني:</label>

                        <div class="col-md-6">
                            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror " placeholder="البريد الإلكتروني" value="{{$edituser-> email}}" name="email" style="text-align:right" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                      </div>
                      {{-- //end of edit Email
                      //Start of edit name field --}}
                    <div class="form-group row py-15%">
                        <label for="name" class="col-md-2 col-form-label text-md-right">إسم المستخدم:</label>

                        <div class="col-md-6">
                            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror " placeholder="إسم المستخدم " value="{{$edituser-> name}}" name="name" style="text-align:right" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                      {{-- //end of edit name --}}

                      <div class="form-group row py-15%">
                          <label for="roles" class="col-md-2 col-form-label text-md-right">الصلاحيات:</label>
                        <div class="col-md-6">
                            @foreach ($roles as $role)
                                <div class="form-check">
                                    <input type="checkbox" name="roles[]" value="{{$role->id}}"
                                    @if( $edituser-> roles-> pluck('id')-> contains($role-> id)) checked @endif>
                                    <label>{{$role-> name}}</label>
                                </div>
                            @endforeach
                        </div>
                      </div>

                      <div class="col-md-10">
                    <button type="submit" class ="btn btn-success">تعديل</button>
                      </div>

                  </form>
                    

                </div>

            </div>
        </div>
    </div>
</div>
</body>











@endsection