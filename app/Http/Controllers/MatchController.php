<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Http\Requests\MatchRequest;
use App\Models\Matche;
use App\Models\Team;
use App\Models\Tournment;
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
        return view('admin.match.index', compact('matches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tournments = Tournment::get();
        $teams = Team::all();
        return view('admin.match.create', compact('tournments', 'teams'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MatchRequest $request)
    {
        // dd($request->all());
        $match = new Matche();
        $match->time_number = $request->time_number;
        $match->time_period = $request->time_period;
        $match->date = $request->date;
        $match->tournment_id = $request->tournment_id;
        $match->status = $request->status;
        $match->save();
        $team1 = $request->team_name_1;
        $team2 = $request->team_name_2;
        $match->teams()->attach([$team1, $team2]);

        return back()->with('success', 'Data created successfully');
        // $match = new Matche();
        // Matche::create([
        //     'time_number' => $request->time_number,
        //     'time_period' => $request->time_period,
        //     'date' => $request->date,
        //     'tournment_id' =>$request->tournment_id,
        //     'status' => $request->status,
        // ]);
        // $match->team_name = $request->team_name_1;
        // $match->team_name = $request->team_name_2;
        // $match->save();
        // return back()->with('success' , 'Data created successfully');
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
        $tournments = Tournment::get();
        $teams = Team::all();
        return view('admin.match.update', compact('match', 'tournments', 'teams'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MatchRequest $request, Matche $match)
    {

        $match->time_number = $request->time_number;
        $match->time_period = $request->time_period;
        $match->date = $request->date;
        $match->tournment_id = $request->tournment_id;
        $match->status = $request->status;
        $match->save();
        $team1 = $request->team_name_1;
        $team2 = $request->team_name_2;
        $match->teams()->sync([$team1, $team2]);


        return redirect()->route('match.index')->with('updated', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Matche::where('id', $id)->delete();
        return back()->with('success', 'Data deleted successfully');
    }
}
