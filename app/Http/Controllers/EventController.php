<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {

      //  $Event = Event::latest()->get();
        return view('Events.index',compact('event'));
    }

     public function create(){
         return view('Events.create');
      }

     //  public function Eventstore(){
     //    $Event1 = new Event;

      //   $Event1->name = request('name');
      //   $Event1->Date = request('date');
      //   $Event1->description = request('description');
      //   $Event1->Place = request('Place');
      //   $Event1->save();

    //     return redirect()->route('Event.index');
    //   }

}
