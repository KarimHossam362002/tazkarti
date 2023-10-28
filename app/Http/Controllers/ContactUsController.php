<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactUsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        $user = Auth::user();
        if($user->type == 'admin') {
        $contacts = ContactUs::paginate(5);
        return view('admin.contact.index' , compact('contacts'));
    }
    else {
        return view('404.index');
    }
    }
    function store(ContactUsRequest $request){
        ContactUs::create([
            'subject' => $request->subject,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);
        return redirect()->route('contact.home')->with('success' , 'Message sent successfully');
    }
    function destroy(string $id){
        ContactUs::where('id', $id)->delete();
        return back()->with('success' , 'Message deleted successfully');
    }

}
