<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Button;
use Illuminate\Http\Request;

class ButtonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('my.button.index',[
            'button'=> Button::first(),
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
     * @param  \App\Models\Button  $button
     * @return \Illuminate\Http\Response
     */
    public function show(Button $button)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Button  $button
     * @return \Illuminate\Http\Response
     */
    public function edit(Button $button)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Button  $button
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Button $button)
    {
            $button->update($request->except('_token') + ['updated_at' => Carbon::now()]);

            $button->save();

            if($request->process_btn_text){
            return redirect()->route('process.index')->withSuccess('URL Updated');
            }
            elseif($request->buy_btn_text){
                return redirect()->route('buyNow.index')->withSuccess('URL Updated');
            }else{
                return redirect()->route('about_back_img')->withSuccess('URL Updated');
            }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Button  $button
     * @return \Illuminate\Http\Response
     */
    public function destroy(Button $button)
    {
        //
    }
}
