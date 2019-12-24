<?php

namespace App\Http\Controllers;
use Gate;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
public function index(){

    if(Gate::denies('view-page')){
        return \redirect('/');
    }
    return view('Aboutus.AboutUs');
}
}
