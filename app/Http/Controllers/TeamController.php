<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Models\Team;
use App\Models\Tournment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
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
        if ($user->type == "admin"){

            $teams = Team::paginate(5);
            return view('admin.team.index' , compact('teams'));
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
        if($user->type == "admin"){

            $tournments = Tournment::get();
            return view('admin.team.create' , compact('tournments'));
        }
        else{
            return view('404.index');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeamRequest $request)
    {
        $request->validate(['team_logo'=>'required']);
        $ext = $request->team_logo->extension();
        $newName = 'Team'.time().rand(0,mt_getrandmax()). '.'.$ext;
        $request->team_logo->move(public_path('assets/images/teams'),$newName);
        Team::create([
            'team_name' => $request->team_name,
            'team_logo' => $newName,
            'tournment_id' =>$request->tournment_id,
        ]);
        return back()->with('success','Data created successfully');
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
    public function edit(Team $team)
    {
        $user = Auth::user();
        if($user->type == "admin"){

            $tournments = Tournment::get();
            return view('admin.team.update' , compact('team' , 'tournments'));
        }
        else{
            return view('404.index');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeamRequest $request, Team $team)
    {
        $request->validate([
            'team_logo' => 'sometimes',
        ]);

        if($request->hasFile('team_logo')){

            $ext = $request->team_logo->extension();
            $newName = "Team".time() . rand(0, mt_getrandmax()) . '.' . $ext;
            $request->team_logo->move(public_path('assets/images/teams'), $newName);
        }
        $team->update([
            
            'team_name' => $request->team_name,            
            'team_logo'=> $newName ?? $request->team_logo,
            'tournment_id' =>$request->tournment_id,

        ]);
        return redirect()->route('team.index')->with('updated' , "Data updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Team::where('id' , $id)->delete();
        return back()->with('success','Data deleted successfully');
    }
}
