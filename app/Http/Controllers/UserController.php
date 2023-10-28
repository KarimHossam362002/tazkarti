<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        $user = Auth::user();
        if($user->type == "admin"){

            $users = User::paginate(5);
            return view('admin.user.index', compact('users')) ;
        }
        else{
            return view('404.index');
        }

    }
    function edit(User $user){
        $user = Auth::user();
        if($user->type == "admin")
        return view('admin.user.update' , compact('user')) ;
        else{
            return view('404.index');
        }
    }
    function update(UserRequest $request , User $user){
      
        $user
        ->where($user->id , $request->id)
        ->update([
            'type' => $request->type,
        ]);
        return redirect()->route('user.index')->with('updated' , 'Data updated successfully');
    
    }
    function destroy(string $id){
        User::where('id', $id)->delete();
        return back()->with('success' , 'User deleted successfully from Database');
    }
}
