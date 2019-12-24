<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event;
use App\Organization;

class EventController extends Controller
{
    public function index() {

        $Event = Event::latest()->get();
        return view('Events.index',['Event'=>$Event,'Organization'=>Organization::all()]);
        

    }

      public function create(){
       
          return view('Events.create',['Organization' => Organization::all()]);
          
       }

     public function eventstore(){
   
        $Event1 = new Event;        
        $Event1->Name = request('name');
        $Event1->Date = request('date');
        $Event1->Description = request('description');
        $Event1->Place = request('Place');
        $Event->organization_id = request('organization_id');
        $Event1->save();

     //   $organization_id = request('organization');

      //  Organization::find($organization_id)->Event()->save($Event1);
        

        return redirect()->route('event.index');
        }

}
