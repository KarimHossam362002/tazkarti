<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UpdateProfileController extends Controller
{
    function index(string $uuid){
        return view('profile.info' , compact('uuid'));
    }
    public function updateProfile(UpdateProfileRequest $request, $uuid)
    {
        $user = User::find($uuid);
    
        if ($user) {
            // Hash the new password before updating it
            if (Hash::check($request->input('password'), $user->password)) {
                if ($request->hasFile('image')) {
                    $ext = $request->image->extension();
                    $newName = "Profile" . time() . rand(0, mt_getrandmax()) . '.' . $ext;
                    $request->image->move(public_path('assets/images/users'), $newName);
                    $user->image = $newName;
                }
    
                $user->password = Hash::make($request->new_password);
    
                $user->update([
                    'name' => $request->name,
                    'email' => $request->email,
                ]);
    
                return redirect()->route('profile.home')->with('success', 'Profile updated successfully.');
            } else {
                return back()->with('error', 'Incorrect old password.');
            }
        } else {
            return back()->with('user_error', 'User not found.');
        }
    }
}
