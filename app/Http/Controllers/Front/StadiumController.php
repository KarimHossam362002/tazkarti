<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Stadium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StadiumController extends Controller
{
    function index(){
        if(Auth::check()){
            
            $stadiums = Stadium::where('status',1)->get();
            return view('stadium.index' , compact('stadiums'));
        }
        else{
            $stadiums = Stadium::where('status',1)->get();
            return view('stadium.index' , compact('stadiums'));
        }
    }
}
