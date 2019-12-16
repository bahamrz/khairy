<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event;

class EventController extends Controller
{
    public function index() {

        $Event = Event::latest()->get();
        return view('Events.index',compact('event'));

    }

      public function create(){
          return view('Events.create');
       }

<<<<<<< HEAD
     //  public function Eventstore(){
     //    $Event1 = new Event;

      //   $Event1->name = request('name');
      //   $Event1->Date = request('date');
      //   $Event1->description = request('description');
      //   $Event1->Place = request('Place');
      //   $Event1->save();

    //     return redirect()->route('Event.index');
    //   }
=======
     public function eventstore(){

        $Event1 = new Event;

        $Event1->Name = request('name');
        $Event1->Date = request('date');
        $Event1->Description = request('description');
        $Event1->Place = request('Place');
        $Event1->save();

        return redirect()->route('event.index');
        }
>>>>>>> 4839849b3d5e5f8a07fc8fd0c1aff6b3f09b9a04

}
