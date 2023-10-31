<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Team;
use App\Models\Matche;
use App\Models\Stadium;
use App\Models\MatchTeam;
use App\Models\Tournment;
use App\Rules\TimeFormat;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\MatchRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class MatchController extends Controller
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
        // $model = Matche::find(1);
        // $formattedDate = $model->custom_date;
        $user = Auth::user();
        if ($user->type == "admin") {
            $matches = Matche::paginate(5);
            return view('admin.match.index', compact('matches'));
        } else {
            return view('404.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        $tournments = Tournment::get();
        $teams = Team::all();
        $stadiums = Stadium::get();
        if ($user->type == "admin") {
            return view('admin.match.create', compact('tournments', 'teams', 'stadiums'));
        } else {
            return view('404.index');
        }
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
        $match->stadium_id = $request->stadium_id;
        $match->status = $request->status;
        $match->save();
        // $team1 = $request->team_name_1;
        // $team2 = $request->team_name_2;
        // $match->teams()->attach([$team1,$team2]);
       


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
    public function edit(Matche $match)
    {
        $user = Auth::user();
        $tournments = Tournment::get();
        $teams = Team::all();
        $stadiums = Stadium::get();
        if ($user->type == "admin") {
            return view('admin.match.update', compact('match', 'tournments', 'teams', 'stadiums'));
        } else {
            return view('404.index');
        }
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
        $match->stadium_id = $request->stadium_id;
        $match->status = $request->status;
        $match->save();
        $team1 = $request->input('team_name_1');
        $team2 = $request->input('team_name_2');
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
