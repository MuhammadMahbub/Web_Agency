<?php

namespace App\Http\Controllers;

use App\Models\FaqUnanswerQ;
use Illuminate\Http\Request;
use Carbon\Carbon;

class FaqUnanswerQController extends Controller
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
        $faq_unanswer_data = FaqUnanswerQ::first();
        return view('admin.faq_bottom.create', compact('faq_unanswer_data'));
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
     * @param  \App\Models\FaqUnanswerQ  $faqUnanswerQ
     * @return \Illuminate\Http\Response
     */
    public function show(FaqUnanswerQ $faqUnanswerQ)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FaqUnanswerQ  $faqUnanswerQ
     * @return \Illuminate\Http\Response
     */
    public function edit(FaqUnanswerQ $faqUnanswerQ)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FaqUnanswerQ  $faqUnanswerQ
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'title'          => 'required',
            'button_text'         => 'required',
            'background_img' => 'image',
        ]);

        $faqUnanswerQ = FaqUnanswerQ::find($id);
        $faqUnanswerQ->update($request->except('_token') + ['updated_at' => Carbon::now()]);

        // Background image save
        if($request->file('background_img')){

            $faq_back_img           = $request->file('background_img');
            $faq_back_img_name       = $faqUnanswerQ->id . time() . 'faq_background_img.' . $faq_back_img->extension('background_img');
            $path                    = public_path('uploads/images/faq_bottom_bg');
            $faq_back_img->move($path, $faq_back_img_name);
            $faqUnanswerQ->background_img = $faq_back_img_name;

            $faqUnanswerQ->save();
        }



        return back()->with('success', 'data update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FaqUnanswerQ  $faqUnanswerQ
     * @return \Illuminate\Http\Response
     */
    public function destroy(FaqUnanswerQ $faqUnanswerQ)
    {
        //
    }
}
