<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Stadium;
use Illuminate\Http\Request;

class StadiumController extends Controller
{
    function index(){
        $stadiums = Stadium::where('status',1)->get();
        return view('stadium.index' , compact('stadiums'));
    }
}
