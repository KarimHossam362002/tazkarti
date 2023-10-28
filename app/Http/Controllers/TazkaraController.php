<?php

namespace App\Http\Controllers;

use App\Models\Entertainment;
use App\Models\Matche;
use App\Models\Tazkara;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TazkaraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        $user = Auth::user();
        if($user->type == "admin"){

            $tazkaras = Tazkara::paginate(5);
            $matches = Matche::get();
            $entertainments = Entertainment::get();
            $users = User::all();
            return view('admin.tazkara.index' , compact('tazkaras' ,'matches' ,'entertainments' , 'users'));
        }
        else{
            return view('404.index');
        }
    }
}
