<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        $users = User::paginate(5);
        return view('admin.user.index', compact('users')) ;
    }
    function edit(User $user){
        return view('admin.user.update' , compact('user')) ;
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
