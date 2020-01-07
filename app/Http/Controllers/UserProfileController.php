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

    $userprod= auth()->user()->products;
    $userprodCount=auth()->user()->products()->count();
    //$userevnt=auth()-user()->events;

    return view('UserProfile.userProfile', compact('userprod','userprodCount'));

    

}



}
