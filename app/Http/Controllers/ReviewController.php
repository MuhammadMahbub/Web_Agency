<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.review.index', [
            'data' => Review::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.review.create');
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
            'image'         => 'image',
            'name'          => 'required',
            'comment'       => 'required',
        ]);

        $data = Review::create($request->except('_token') + ['created_at' => Carbon::now(), 'image' => 'default_review_img.jpg']);

        if($request->image)
        {
            $image    = $request->file('image');
            $filename = $data->id . '-' . time(). '.' . $image->extension();
            $location = public_path('uploads/review/');
            $image->move($location, $filename);

            $data->image = $filename;
            $data->save();
        }

        return redirect()->route('review.index')->withSuccess('Data Store Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        return view('admin.review.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        $request->validate([
            'image'         => 'image',
            'name'          => 'required',
            'comment'       => 'required',
        ]);

        if($request->image)
        {
            $image    = $request->file('image');
            $filename = $review->id . '-' . time(). '.' . $image->extension();
            $location = public_path('uploads/review/');
            $image->move($location, $filename);

            $review->image = $filename;
        }

        $review->name           = $request->name;
        $review->company_name   = $request->company_name;
        $review->comment        = $request->comment;
        $review->save();

        return redirect()->route('review.index')->withSuccess('Data Update Success');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        $review->delete();
        return back()->withSuccess('Data delete success');
    }
}
