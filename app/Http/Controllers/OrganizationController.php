<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganizationController extends Controller
{
   public function index(){
    return view('Organization.orgnize');
    //return store();

  }

  public function store(){

    $org= new Organization;
    $org->Org_Name='Tatweer';
    $org->Org_Desc='Is orgnization for development';

    
  }
}
