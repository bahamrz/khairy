<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event;
use App\user;
use App\Organization;
use Auth;
use Gate;
use App\Participatation;
use Illuminate\Support\Facades\DB;

class PartController extends Controller
{
    /* public function index() {

        $Eventt = Event::latest()->paginate(6);
        return view('Events.index',['Eventt'=>$Eventt]);

    }

      public function create(){

          return view('Events.create',['Organization' => Organization::all()]);

       }*/

     public function partstore(){



        $Part = new Participation;
        $Part->user_id = request('user_id');
        $Part->even_id = request('even_id');
        $Part->save();

        return redirect()->route('event.index');
        }

       
       
      
           // if (is_null($user_part)) {
             // $event = event::find($id);
             // $product->orders++;
              //$product->save();
      
            //  Event::find($id)->events()->attach(auth()->user());
            //  return redirect()->route('event.index')->withSuccess('Your participated Seccessful ! ')->with($user_part);
           // }else {
            //  return redirect()->route('event.index')->withFail('unable to participate!'); }
            
      
          
           }
      

       

