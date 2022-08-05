<?php


namespace App\Http\Controllers;

use App\Models\ColorSetting;
use Illuminate\Http\Request;

class ColorSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.colorSettings.index', [

            'colorSettings' => colorSetting::first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ColorSetting  $colorSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ColorSetting $colorSetting)
    {
        // Form Validation
        $request->validate([

            'theme_color'  => 'required',
            'theme_header_background'  => 'required',
            'theme_footer_background'  => 'required',
        ]);

        $colorSetting->theme_color  = $request->theme_color;
        $colorSetting->theme_menu_text_color = $request->theme_menu_text_color;
        $colorSetting->theme_header_background = $request->theme_header_background;
        $colorSetting->theme_footer_background = $request->theme_footer_background;


        $colorSetting->save();

        return back()->withSuccess('Updated Successfully');
    }

}
