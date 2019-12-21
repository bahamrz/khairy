<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organization;
class OrganizationController extends Controller
{
   public function index(){
    return view('Organization.orgnize');
    //return store();

  }

  public function store(){

    $org = new Organization;
    $org->Org_Name = 'Tatweer';
    $org->Org_Desc = 'Is orgnization for development';


  }

  public function create(){
    return view('Organization.createOrg');
  }

  public function orgstore(){
    $org1 = new Organization;

    $org1->Org_Name = request('name');
    $org1->Org_Desc = request('description');
    $org1->save();

    return redirect()->route('Organization.orgnize');
  }
}
