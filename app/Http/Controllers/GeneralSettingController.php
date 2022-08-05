<?php

namespace App\Http\Controllers;

use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{

     /**
     * Construct
     */
    public function __construct()
    {
        // $this->middleware('auth');
        // $this->middleware('verified');
        // $this->middleware('checkAdmin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $get_generel_settings_data = GeneralSetting::first();
        return view('admin.generalSettings.index', compact('get_generel_settings_data'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GeneralSetting  $generalSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GeneralSetting $generalSetting)
    {
        // Form Validation
        $request->validate([
            'site_logo'              => 'image',
            'footer_logo'              => 'image',
            'phone'                  => 'required',
            'arrow_icon'             => 'required',
            'copyright'              => 'required',
        ]);

         // Site Logo
         if($request->hasFile('site_logo')){

            $logo = $request->file('site_logo'); 
            $filename = 'site_logo.'. $logo->extension('site_logo');
            $location = public_path('uploads/images/generalSetting/'); 
            $logo->move($location, $filename); 

            $generalSetting->site_logo = $filename; 

        }

         // Footer Logo
         if($request->hasFile('footer_logo')){

            $footer_logo = $request->file('footer_logo'); 
            $filename = 'footer_logo.'. $footer_logo->extension('footer_logo');
            $location = public_path('uploads/images/generalSetting/'); 
            $footer_logo->move($location, $filename); 

            $generalSetting->footer_logo = $filename; 

        }

         // Favicon image
         if($request->hasFile('favicon')){

            $favicon_logo = $request->file('favicon'); 
            $filename = 'favicon.'. $favicon_logo->extension('favicon');
            $location = public_path('uploads/images/generalSetting/'); 
            $favicon_logo->move($location, $filename); 

            $generalSetting->favicon = $filename; 

        }


        $generalSetting->phone                = $request->phone;
        $generalSetting->arrow_icon           = $request->arrow_icon;
        $generalSetting->copyright            = $request->copyright;
        $generalSetting->common_button_text   = $request->common_button_text;


        $generalSetting->save();

        return back()->withSuccess('Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GeneralSetting  $generalSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(GeneralSetting $generalSetting)
    {
        //
    }
}
