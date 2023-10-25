<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Tazkara;
use Illuminate\Http\Request;

class TazkaraController extends Controller
{
    function index(){
        $tazkaras = Tazkara::paginate(5);
        return view('admin.tazkara.index' , compact('tazkaras'));
    }
}
