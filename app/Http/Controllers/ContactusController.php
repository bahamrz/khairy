<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class ContactusController extends Controller
{
    public function index()
    {
        return view('ContactUs.index');
    }

    public function create()
    {
        return request()->all();
    }
    public function send(Request $request){
      request()->validate($this->rules());
      $data = array('email'    => $request->email,
                    'name'  => $request->name,
                    'phoneNumber' => $request->phoneNumber,
                    'message'  => $request->message);

      Mail::to('ngokhairy@gmail.com')->send(new SendMail($data));
      return back()->with('success','Thank you for Contacting us!');

    }
    public function rules(){
      return [
          'email' => 'required|email',
          'name' => 'required',
          'message' => 'required',
          'phoneNumber' => 'required'
      ];
    }
}
