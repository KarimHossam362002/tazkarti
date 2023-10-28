<?php

namespace App\Http\Controllers;

use App\Http\Requests\StadiumRequest;
use App\Models\Stadium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StadiumController extends Controller
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
            if($user->type == 'admin'){
            $stadiums = Stadium::paginate(5);
            return view('admin.stadium.index' , compact('stadiums'));
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
        return view('admin.stadium.create');
        else
        return view('404.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StadiumRequest $request)
    {
        Stadium::create([
            'name' => $request->name,
            'city' => $request->city,
            'location' => $request->location,
            'status' => $request->status,
        ]);
        return back()->with('success', 'Data created successfully');
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
    public function edit(Stadium $stadium)
    {
        $user = Auth::user();
        if($user->type == "admin")
        return view('admin.stadium.update' , compact('stadium'));
        else
        return view('404.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StadiumRequest $request, Stadium $stadium)
    {
        $stadium->update([
            'name' => $request->name,
            'city' => $request->city,
            'location' => $request->location,
            'status' => $request->status,
        ]);
        return redirect()->route('stadium.index')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Stadium::where('id' , $id)->delete();
        return back()->with('success' , "Data deleted successfully");
    }
}
