<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event;
use App\Organization;
use Auth;
use Gate;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index() {

        $Eventt = Event::latest()->paginate(6);
        return view('Events.index',['Eventt'=>$Eventt]);
        

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
        $Event1->organization_id = request('organization_id');
        $Event1->image = request()->file('image') ? request()->file('image')->store('public') : null;
        $Event1->save();
        return redirect()->route('event.index');
        }

        public function edit($id)
        {
            $Event = Event::find($id);
            return view('Events.edit',['Event'=>$Event ,
            'Organization' => Organization::all()]);
        }
    
        public function update($id)
        {
            $Event1 = Event::find($id);
            if (request()->file('image')) {
                $newImagePath = request()->file('image')->store('public');
                $Event1->image = str_replace('public/', '', $newImagePath);
            }
            $Event1 = new Event;        
            $Event1->Name = request('name');
            $Event1->Date = request('date');
            $Event1->Description = request('description');
            $Event1->Place = request('Place');
            $Event1->organization_id = request('organization_id');
            $Event1->save();
            return redirect()->route('event.index');
        }
        public function destroy($id)
        {
            Event::find($id)->delete();
            return redirect('/event');
        }
}