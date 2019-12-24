<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
public function index(){

    $userprod= auth()->user()->Product;

    return view('UserProfile.userProfile',compact('userprod'));
}



}
