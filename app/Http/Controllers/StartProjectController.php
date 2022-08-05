<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\StartProject;
use Illuminate\Http\Request;

class StartProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.startProject.index', [
            'data' => StartProject::first(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.startProject.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StartProject  $startProject
     * @return \Illuminate\Http\Response
     */
    public function show(StartProject $startProject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StartProject  $startProject
     * @return \Illuminate\Http\Response
     */
    public function edit(StartProject $startProject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StartProject  $startProject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StartProject $startProject)
    {
        $request->validate([
            'title'         => 'required',
            'meta_title'    => 'required',
            'button_text'   => 'required',
        ]);

        $startProject->update($request->except('_token') + ['updated_at' => Carbon::now()]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StartProject  $startProject
     * @return \Illuminate\Http\Response
     */
    public function destroy(StartProject $startProject)
    {
        //
    }
}
