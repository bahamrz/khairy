<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organization;
class OrganizationController extends Controller
{
   public function index(){
    $Organization = Organization::latest()->get();
    return view('Organization.index',compact('Organization'));
  }
  public function create(){
    return view('Organization.create');
 }

  public function organizationstore(){

    $Org = new Organization;
    $Org->Org_Name = request('Org_Name');
    $Org->Org_Desc = request('Org_Desc');
    $Org->save();

    return view('Organization.index');


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
