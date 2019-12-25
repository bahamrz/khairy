<?php

namespace App\Http\Controllers;
use Gate;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
public function index(){

    if(Gate::denies('view-page')){
        return redirect()->back()->witherrors('');
    }
    return view('Aboutus.AboutUs');
}
}
