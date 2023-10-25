<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Http\Requests\MatchRequest;
use App\Models\Matche;
use App\Rules\TimeFormat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $model = Matche::find(1);
        // $formattedDate = $model->custom_date;
        $matches = Matche::paginate(5);
        return view('admin.match.index' , compact('matches'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.match.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MatchRequest $request)
    {
       
        
        Matche::create([
            'time_number' => $request->time_number,
            'time_period' => $request->time_period,
            'date' => $request->date,
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
    public function edit(Matche $match)
    {
        return view ('admin.match.update' , compact('match'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MatchRequest $request, Matche $match)
    {
        $match->update([
            'time_number' =>$request->time_number,
            'time_period' =>$request->time_period,
            'date' =>$request->date,
            'status' =>$request->status,
        ]);
        return redirect()->route('match.index')->with('updated' , 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Matche::where('id',$id)->delete();
        return back()->with('success','Data deleted successfully');
    }
}
