<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_tetimonials_data = Testimonial::all();
        return view('admin.testimonial.index', compact('all_tetimonials_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create');
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
            'user_name'    => 'required',
            'user_review'  => 'required',
            'user_photo'   => 'required|image',
        ]);
        
        $testimonial = Testimonial::create($request->except('_token') + ['created_at' => Carbon::now()]);

        if($request->file('user_photo')){
            $image_file       = $request->file('user_photo');
            $new_image_name   = $testimonial->id.'.'.time().'.'.$image_file->extension();
            $location         = public_path('uploads/images/testimonial');
            $image_file->move($location, $new_image_name);
            $testimonial->user_photo = $new_image_name;
            $testimonial->save();
        }

        return redirect()->route('testimonial.index')->with('success', 'data upload successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        return view('admin.testimonial.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'user_name'    => 'required',
            'user_review'  => 'required',
            'user_image'   => 'image',
        ]);

        $testimonial->update($request->except('_token') + ['updated_at' => Carbon::now()]);

        if($request->file('user_photo')){
            $image_file       = $request->file('user_photo');
            $new_image_name   = $testimonial->id.'.'.time().'.'.$image_file->extension();
            $location         = public_path('uploads/images/testimonial');
            $image_file->move($location, $new_image_name);
            $testimonial->user_photo = $new_image_name;
            $testimonial->save();
        }

        return redirect()->route('testimonial.index')->with('success', 'data update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return back()->with('warning', 'data delete successfully');
    }
}
