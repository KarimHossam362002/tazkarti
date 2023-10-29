<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Matche;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MatchController extends Controller
{
   
    function index(){
      
      
       
        $matches = Matche::where('status', 1)->get();
       return view('matches.index' , compact('matches'));
     
    
    }
}
