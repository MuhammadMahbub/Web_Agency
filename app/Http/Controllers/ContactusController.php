<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactus;
use App\Models\ClientMessage;
use App\Models\Contact;
use Carbon\Carbon;

class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_client_contact_message = Contact::all();
        return view('admin.contact_us.contact_message', compact('all_client_contact_message'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_contactus_data = Contactus::first();
        return view('admin.contact_us.create', compact('all_contactus_data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message_details = Contact::find($id);
        return view('admin.contact_us.show', compact('message_details'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'contact_title1'      => 'required',
            'contact_support'     => 'required',
            'contact_icon1'       => 'image',
            'contact_title2'      => 'required',
            'email_one'           => 'required|email',
            'contact_icon2'       => 'image',
            'contact_title3'      => 'required',
            'contact_address'     => 'required',
            'contact_icon3'       => 'image',
        ]);


        $contactus = Contactus::find($id);
        $contactus->update($request->except('_token') + ['updated_at' => Carbon::now()]);

        if($request->file('contact_icon1')){
            $contact_icon_image       = $request->file('contact_icon1');
            $new_image_name           = $id.'.'.time().'contact_icon1'.'.'.$contact_icon_image->extension();
            $image_location           = public_path('uploads/images/contact_us/');
            $contact_icon_image->move($image_location, $new_image_name);
            $contactus->contact_icon1 = $new_image_name;
            
        }

        if($request->file('contact_icon2')){
            $contact_icon_image       = $request->file('contact_icon2');
            $new_image_name           = $id.'.'.time().'contact_icon2'.'.'.$contact_icon_image->extension();
            $image_location           = public_path('uploads/images/contact_us/');
            $contact_icon_image->move($image_location, $new_image_name);
            $contactus->contact_icon2 = $new_image_name;
            
        }

        if($request->file('contact_icon3')){
            $contact_icon_image       = $request->file('contact_icon3');
            $new_image_name           = $id.'.'.time().'contact_icon3'.'.'.$contact_icon_image->extension();
            $image_location           = public_path('uploads/images/contact_us/');
            $contact_icon_image->move($image_location, $new_image_name);
            $contactus->contact_icon3 = $new_image_name;
            
        }

        $contactus->update();

        return back()->with('success', 'Update Successfully');
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contact::find($id)->delete();
        return back()->with('delete_message', 'message deleted successfully!');
    }
}
