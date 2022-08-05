<?php

namespace App\Http\Controllers;

use App\Models\FaqTop;
use Illuminate\Http\Request;
use Carbon\Carbon;

class FaqTopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_faq_top_content = FaqTop::first();
        return view('admin.faq_top.create', compact('all_faq_top_content'));
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
     * @param  \App\Models\FaqTop  $faqTop
     * @return \Illuminate\Http\Response
     */
    public function show(FaqTop $faqTop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FaqTop  $faqTop
     * @return \Illuminate\Http\Response
     */
    public function edit(FaqTop $faqTop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FaqTop  $faqTop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FaqTop $faqTop)
    {
        $request->validate([
            'title_one'          => 'required',
            'description_one'    => 'required',
            'title_two'          => 'required',
            'description_two'    => 'required',
            'title_three'        => 'required',
            'description_three'  => 'required',
        ]);

        $faqTop->update($request->except('_token') + ['updated_at' => Carbon::now()]);
        
        return back()->with('success', 'data update successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FaqTop  $faqTop
     * @return \Illuminate\Http\Response
     */
    public function destroy(FaqTop $faqTop)
    {
        //
    }
}
