<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        $user = Auth::user();
        if ($user->type == 'admin'){
        return view('admin.layout');
    }
    else{
        return view('404.index');
    }
    }
}
