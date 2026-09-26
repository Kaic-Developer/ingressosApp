<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventsContoller extends Controller
{

public function index(){

    // $events = Event::all();
    return view('events.index');
}
 


}
