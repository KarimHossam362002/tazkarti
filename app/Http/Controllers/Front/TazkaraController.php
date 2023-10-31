<?php

namespace App\Http\Controllers\Front;

use App\Events\TicketCreated;
use App\Http\Controllers\Controller;
use App\Models\Tazkara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TazkaraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function show(string $id){
        
        $tazkaras =Tazkara::get();
         return view('userTicket.index' , compact('tazkaras'));

    }
    // problem here
    function createTazkara(){
        // $user = Auth::user();
     if (Auth::check()){
        $tazkara = new Tazkara();
        event(new TicketCreated($tazkara));
        $tazkara->save();
        return back()->with('booked' , 'Ticket booked successfully');   
     }
     else
     return view('404.index');
    }
}
