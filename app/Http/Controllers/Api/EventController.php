<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Event;
class EventController extends Controller
{
  public function index()
  {
      return response()->json(Event::with('participations', 'Organization')->get());
  }
  public function show($id)
  {
      return response()->json(Event::with('participations', 'Organization')->find($id));
  }
}
