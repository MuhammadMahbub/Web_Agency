<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\AddURL;
use App\Models\Banner;
use App\Models\Service;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.banner.index',
        ['data' => Banner::all(),]
    );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.create');
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
            'image' => 'required|image',
            'title_one'     => 'required',
            'title_two'     => 'required',
            'title_three'     => 'required',
            'button_text'   => 'required',
        ]);

        $data = Banner::create($request->except('_token') + ['created_at' => Carbon::now()]);

        if($request->image)
        {
            $image    = $request->file('image');
            $filename = $data->id . '-' . time(). '.' . $image->extension();
            $location = public_path('uploads/banner/');
            $image->move($location, $filename);

            $data->image = $filename;
            $data->save();
        }

        return redirect()->route('banner.index')->withSuuccess('Data Add Success ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('admin.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        $request->validate([
            'title_one'     => 'required',
            'title_two'     => 'required',
            'title_three'     => 'required',
            'button_text'   => 'required',
        ]);

        $banner->update($request->except('_token') + ['created_at' => Carbon::now()]);

        if($request->image)
        {
            $image    = $request->file('image');
            $filename = $banner->id . '-' . time(). '.' . $image->extension();
            $location = public_path('uploads/banner/');
            $image->move($location, $filename);

            $banner->image = $filename;
            $banner->save();
        }

        return redirect()->route('banner.index')->withSuccess('Data Update Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();
        return back()->with('warning','Delete Data Done');
    }
}
