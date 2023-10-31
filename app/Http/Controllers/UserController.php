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
       
            if($user->type =='admin'){
            $users = User::paginate(5);
            return view('admin.user.index', compact('users')) ;
        }
        else{
            return view('404.index');
        }

    }
    public function edit($id)
{
    $user = User::find($id);
    
    return view('admin.user.update', compact('user'));
}

public function update(UserRequest $request, $id)
{
    
    $user = User::find($id);
   $user->update(['type' => $request->type]);

    
    return redirect()->route('user.index')->with('updated', 'User type updated successfully');
}
    function destroy(string $id){
        User::where('id', $id)->delete();
        return back()->with('success' , 'User deleted successfully from Database');
    }
}
