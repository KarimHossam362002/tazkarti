<?php

namespace App\Http\Controllers;

use App\Http\Requests\TournmentRequest;
use App\Models\Tournment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TournmentController extends Controller
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
        if($user->type == "admin"){

            $tournments = Tournment::paginate(5);
            return view ('admin.tournment.index' , compact('tournments'));
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
        if($user->type == "admin")
        return view ('admin.tournment.create');
        else
        return view('404.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TournmentRequest $request)
    {
        
        Tournment::create([
            'tournment_name' => $request->tournment_name,
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
    public function edit(Tournment $tournment)
    {   
        $user = Auth::user();
        if($user->type == "admin")
        return view('admin.tournment.update' , compact('tournment'));
        else
        return view('404.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TournmentRequest $request, Tournment $tournment)
    {
        $tournment->update([
            'tournment_name' => $request->tournment_name,
            'status' => $request->status,
        ]);
        return redirect()->route('tournment.index')->with('updated' , "Data updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tournment::where('id' , $id)->delete();
        return back()->with('success' , "Data deleted successfully");
    }
}
