<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    function index(){
        $contacts = ContactUs::paginate(5);
        return view('admin.contact.index' , compact('contacts'));
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
