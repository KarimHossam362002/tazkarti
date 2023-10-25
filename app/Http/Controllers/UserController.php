<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        $users = User::paginate(5);
        return view('admin.user.index', compact('users')) ;
    }
}
