<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainPageController extends Controller
{
    function index(){
        if (Auth::check()) {
            // User is logged in, return a view for authenticated users
            return view('profile.index');
        } else {
            // User is not logged in, return a view for guests
            return view('home.index');
        }
    }
}
