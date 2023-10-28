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
    function createTazkara(Request $request){
        $user = Auth::user();
     if ($user){
        $tazkara = new Tazkara();
        event(new TicketCreated($tazkara));
        $tazkara->save();
        return view('userTicket.index' , compact('user'));
     }   
    }
}
