<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\TitleSetting;
use Illuminate\Http\Request;

class TitleSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.titlesettings.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
     * @param  \App\Models\TitleSetting  $titleSetting
     * @return \Illuminate\Http\Response
     */
    public function show(TitleSetting $titleSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TitleSetting  $titleSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(TitleSetting $titleSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TitleSetting  $titleSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TitleSetting $titleSetting)
    {
        $titleSetting->update($request->except('_token') + ['updated_at' => Carbon::now()]);

        $titleSetting->save();

        return redirect()->route('titleSettings.index')->withSuccess('Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TitleSetting  $titleSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(TitleSetting $titleSetting)
    {
        //
    }
}
