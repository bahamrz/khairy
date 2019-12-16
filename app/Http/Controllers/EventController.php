<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event;

class EventController extends Controller
{
    public function index() {
        
        $Event = Event::latest()->get();
        return view('Events.index',compact('Event'));
    }

      public function create(){
          return view('Events.create');
       }

     public function eventstore(){
       
        $Event1 = new Event;
  
        $Event1->Name = request('name');
        $Event1->Date = request('date');       
        $Event1->Description = request('description');
        $Event1->Place = request('Place');
        $Event1->save();
  
        return redirect()->route('event.index');
        }

}
