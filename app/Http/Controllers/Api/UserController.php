<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Product;
use Gate;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    //



    public function useredit($id){
        // return response()->json(auth('api')->user());
        
        $edituser = User::find($id);
        return response()->json($edituser);
    }

    
public function update(Request $request, $id)
{
  // dd($request->toArray());
//   $request->validate($this->rules());
    $usr=User::find($id);
    $usr->name = request('name');
    $usr->email = request('email');
    if(request('password')!==  null){
      $usr->password = Hash::make(request('password'));
    }
    $usr->save();

    return response()->json(['Success' => ['Nice']], 200);
}


public function showdonations(){

    $userprod= auth()->user()->products;
    return \response()->json($userprod);
}

private function rules()
{
    return [
        'name' => 'required|max:255',
        'email' => 'required|email|max:255'
        // ,'password' => 'nullable|min:6',
        // 'passwordConfirm' => 'nullable|required_with:password|same:password',
    
      ];
}
    
    
}

