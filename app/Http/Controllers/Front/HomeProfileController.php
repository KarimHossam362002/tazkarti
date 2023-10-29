<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Entertainment;
use App\Models\Matche;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeProfileController extends Controller
{
    function index(){
        $user = Auth::user();
        $matches = Matche::where('status' , 1)->get();
        $events = Entertainment::where('status' , 1)->get();
        return view('profile.index' , compact('matches', 'events' , 'user'));
    }
}
