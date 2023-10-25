<?php

namespace App\Http\Controllers;

use App\Http\Requests\EntertainmentRequest;
use App\Models\Entertainment;
use Illuminate\Http\Request;

class EntertainmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entertainments = Entertainment::paginate(5);
        return view('admin.entertainment.index' , compact('entertainments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.entertainment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EntertainmentRequest $request)
    {

        $request->validate(['image'=>'required']);
        $ext = $request->image->extension();
        $newName = 'Entertainment'.time().rand(0,mt_getrandmax()). '.'.$ext;
        $request->image->move(public_path('assets/images/entertainments'),$newName);

        Entertainment::create([
            'name' => $request->name,
            'title' => $request->title,
            'location' => $request->location,
            'description' => $request->description,
            'image' => $newName,
            'status' => $request->status,
        ]);
        return back()->with('success' , 'Data created successfully');
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
    public function edit(Entertainment $entertainment)
    {
        return view ('admin.entertainment.update' , compact('entertainment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EntertainmentRequest $request, Entertainment $entertainment)
    {
        if($request->hasFile('image')){

            $ext = $request->image->extension();
            $newName = "Entertainment".time() . rand(0, mt_getrandmax()) . '.' . $ext;
            $request->image->move(public_path('assets/images/entertainments'), $newName);
        }
            $entertainment->update([
                'name' => $request->name,
                'title' => $request->title,
                'location' => $request->location,
                'description' => $request->description,
                'image'=> $newName ?? $request->image,
                'status' => $request->status,

            ]);
            return redirect()->route('entertainment.index')->with('updated' , 'Data updated successfully');
        }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Entertainment::where('id', $id)->delete();
        return back()->with('success' , "Data deleted successfully");
    }
}
