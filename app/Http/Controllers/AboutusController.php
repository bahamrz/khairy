<?php

namespace App\Http\Controllers;
use Gate;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
public function index(){
    return view('Aboutus.AboutUs');
}
}
