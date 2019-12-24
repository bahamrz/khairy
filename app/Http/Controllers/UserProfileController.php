<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
public function index(){

    $userprod= auth()->user()->products;
  $userprodCount=auth()->user()->products()->count();

    return view('UserProfile.userProfile', compact('userprod','userprodCount'));
}



}
