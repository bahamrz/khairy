<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use Gate;
use App\User;

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

    return view('UserProfile.userProfile', compact('userprod','userprodCount'));

    

}

public function update(Request $request , $id)
{

 $user = User::find($id);
 $user->name = $request->name;
 $user->email =$request->email;
 $user->save();

 return redirect()->back();


}


}
