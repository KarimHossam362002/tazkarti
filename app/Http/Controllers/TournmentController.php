<?php

namespace App\Http\Controllers;

use App\Http\Requests\TournmentRequest;
use App\Models\Tournment;
use Illuminate\Http\Request;

class TournmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tournments = Tournment::paginate(5);
        return view ('admin.tournment.index' , compact('tournments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.tournment.create');
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
        return view('admin.tournment.update' , compact('tournment'));
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
