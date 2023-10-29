<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Entertainment;
use Illuminate\Http\Request;

class EventController extends Controller
{
    function index(){
        $events = Entertainment::where('status' , 1)->get();
        return view('events.index' , compact('events'));
    }
}
