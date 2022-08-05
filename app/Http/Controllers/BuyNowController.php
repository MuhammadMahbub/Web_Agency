<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\BuyNow;
use Illuminate\Http\Request;

class BuyNowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.buyNow.index', [
            'datas' => BuyNow::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\BuyNow  $buyNow
     * @return \Illuminate\Http\Response
     */
    public function show(BuyNow $buyNow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BuyNow  $buyNow
     * @return \Illuminate\Http\Response
     */
    public function edit(BuyNow $buyNow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BuyNow  $buyNow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BuyNow $buyNow)
    {
        $request->validate([
            'image'         => 'image',
            'title'         => 'required',
            'description'   => 'required',
            'buy_now_link'   => 'required',
        ]);

        $buyNow->update($request->except('_token') + ['updated_at' => Carbon::now()]);

        if($request->file('image'))
        {
            $image    = $request->file('image');
            $filename = $buyNow->id . '-' . time(). '.' . $image->extension();
            $location = public_path('uploads/buyNow');
            $image->move($location, $filename);

            $buyNow->image = $filename;
        }

        $buyNow->save();

        return redirect('admin/buyNow')->withSuccess('Data Update Success');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BuyNow  $buyNow
     * @return \Illuminate\Http\Response
     */
    public function destroy(BuyNow $buyNow)
    {
        //
    }
}
