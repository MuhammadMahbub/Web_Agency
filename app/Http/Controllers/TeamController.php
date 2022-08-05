<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\TeamMemberMail;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_teams_data = Team::all();
        
        return view('admin.team.index', compact('all_teams_data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'member_name'          => 'required',
            'member_designation'   => 'required',
            'member_details'       => 'required',
            'member_phone'         => 'required',
            'member_email'         => 'required',
            'member_photo'         => 'required|image',
        ]);

        $member_name = $request->member_name;
        $team_slug = Str::slug($member_name).'-'.Str::random(15);
        
        $team = Team::create($request->except('_token') + ['created_at' => Carbon::now(), 'team_slug' => $team_slug]);

        if($request->file('member_photo')){
            $image_file         = $request->file('member_photo');
            $new_image_name     = $team->id.'.'.time().'.'.$image_file->extension();
            $location           = public_path('uploads/images/team');
            $image_file->move($location, $new_image_name);
            $team->member_photo = $new_image_name;
            $team->save();
        }

        return redirect()->route('team.index')->with('success', 'data upload successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return view('admin.team.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('admin.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $request->validate([
            'member_name'          => 'required',
            'member_designation'   => 'required',
            'member_details'       => 'required',
            'member_phone'         => 'required',
            'member_email'         => 'required',
            'member_photo'         => 'required|image',
        ]);

        $team->update($request->except('_token') + ['updated_at' => Carbon::now()]);

        if($request->file('member_photo')){
            $image_file         = $request->file('member_photo');
            $new_image_name     = $team->id.'.'.time().'.'.$image_file->extension();
            $location           = public_path('uploads/images/team');
            $image_file->move($location, $new_image_name);
            $team->member_photo = $new_image_name;
            $team->save();
        }

        return redirect()->route('team.index')->with('success', 'data update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return back()->with('warning', 'data delete successfully');
    }
}
