<?php

namespace App\Http\Controllers;

use App\Http\Requests\FaqRequest;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user = Auth::user();
        if ($user->type == 'admin') {
        $faqs = Faq::paginate(5);
        return view('admin.faq.index' , compact('faqs'));
    }
    else{
        return view('404.index');
    }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        if ($user->type == 'admin') {
        return view('admin.faq.create');
        }
        else {
            return view('404.index');
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FaqRequest $request)
    {
        Faq::create([
            'question' => $request->question,
            'answer' => $request->answer,
            'status' => $request->status,
        ]);
        return back()->with('success' , "Data created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faq $faq)
    {
        $user = Auth::user();
        if($user->type == 'admin'){
        return view('admin.faq.update' , compact('faq'));
        }
        else{
            return view('404.index');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FaqRequest $request, Faq $faq)
    {
        $faq->update([
            'question' => $request->question,
            'answer' => $request->answer,
            'status' => $request->status,
        ]);
        return redirect()->route('faq.index')->with('updated','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Faq::where('id', $id)->delete();
        return back()->with('success' , "Data deleted successfully");
    }
}
