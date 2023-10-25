<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::paginate(5);
        return view('admin.team.index' , compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.create');
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
        return view('admin.team.update' , compact('team'));
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
