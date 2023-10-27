<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Entertainment;
use App\Models\Matche;
use App\Models\Tazkara;
use Illuminate\Http\Request;

class TazkaraController extends Controller
{
    function index(){
        $tazkaras = Tazkara::paginate(5);
        $matches = Matche::get();
        $entertainments = Entertainment::get();
        return view('admin.tazkara.index' , compact('tazkaras' ,'matches' ,'entertainments'));
    }
}
