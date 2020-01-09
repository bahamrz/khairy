<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use Gate;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;



class UserProfileController extends Controller
{
public function index(){

if (Gate::denies('user-show')){
  return redirect('home');
}

 //return auth()-user()->participations;

    $userprod= auth()->user()->products;
    $userprodCount=auth()->user()->products()->count();
    //$userevnt=auth()-user()->events;


    return view('UserProfile.userProfile', compact('userprod','userprodCount','users'));
}

public function show(){
  $userprod= auth()->user()->products;
  $userprodCount=auth()->user()->products()->count();
  // $userevents= Auth::user()->participations;
  // dd($userevents);
  return view('UserProfile.index',compact('userprod','userprodCount'));
}

public function edit($id)
{
// return $this->middleware('Auth');
    //
    $edituser = User::find($id);
    return view ('UserProfile.edit',compact('edituser'));
}

public function update(Request $request, $id)
    {
      // dd($request->toArray());
      $request->validate($this->rules());

        $usr=User::find($id);
        $usr->name = request('name');
        $usr->email = request('email');
        if(request('password')!==  null){
          $usr->password = Hash::make(request('password'));
        }
        $usr->save();

// Yousra Code 
//     return view('UserProfile.userProfile', compact('userprod','userprodCount'));
// }

// public function update(Request $request , $id)
// {

//  $user = User::find($id);
//  $user->name = $request->name;
//  $user->email =$request->email;
//  $user->save();

//  return redirect()->back();


// }

        return redirect('/user');
    }
    private function rules()
    {
        return [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'nullable|min:6',
            'passwordConfirm' => 'nullable|required_with:password|same:password',
        
          ];
    }

}
