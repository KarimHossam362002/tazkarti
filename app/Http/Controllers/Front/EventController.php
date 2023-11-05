<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Entertainment;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        $events = Entertainment::where('status' , 1)->get();
        return view('events.index' , compact('events'));
    }
}
