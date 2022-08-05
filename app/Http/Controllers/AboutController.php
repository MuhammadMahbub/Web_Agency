<?php

namespace App\Http\Controllers;

use App\Models\AboutBackImg;
use App\Models\AboutHeader;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AboutController extends Controller
{
    public function about_header()
    {
        $about_header = AboutHeader::first();
        return view('my.about.header', compact('about_header'));
    }

    public function about_header_update(Request $request, $id)
    {
        $about_header = AboutHeader::find($id);

        $about_header->update($request->except('_token') + ['updated_at' => Carbon::now()]);

        $request->validate([
            'heading'    => 'required',
            'name'   => 'required',
            'post'   => 'required',
        ]);

        $about_header->save();

        return redirect()->route('about_header')->withSuccess('Updated successfully');
    }

    public function about_back_img()
    {
        $about_img = AboutBackImg::all();

        return view('my.about.backimg', compact('about_img'));
    }

    public function about_back_img_update(Request $request, $id)
    {
        $about_img = AboutBackImg::find($id);

        $request->validate([
            'back_img' => 'image',
            'name'    => 'required',
            'post'   => 'required',
            'button_text'   => 'required',
        ]);

        $about_img->update($request->except('_token') + ['updated_at' => Carbon::now()]);

        if ($request->hasFile('back_img')) {

            $back_img = $request->file('back_img');
            $filename = uniqid() . '.' . $back_img->extension('back_img');
            $location = public_path('uploads/aboutus');
            $back_img->move($location, $filename);

            $about_img->back_img = $filename;
        }

        $about_img->save();

        return redirect()->route('about_back_img')->withSuccess('Updated successfully');
    }

    public function about_us()
    {
        $about_us = AboutUs::first();

        return view('my.about.us', compact('about_us'));
    }

    public function about_us_update(Request $request, $id)
    {
        $about_us = AboutUs::find($id);

        $request->validate([
            'title1'    => 'required',
            'description1'   => 'required',
            'image1' => 'image',
            'title2'    => 'required',
            'description2'   => 'required',
            'image2' => 'image',
            'title3'    => 'required',
            'description3'   => 'required',
            'image3' => 'image'
        ]);

        $about_us->update($request->except('_token') + ['updated_at' => Carbon::now()]);

        if ($request->hasFile('image1')) {

            $about_us_image = $request->file('image1');
            $filename = uniqid() . '.' . $about_us_image->extension('image1');
            $location = public_path('uploads/aboutus');
            $about_us_image->move($location, $filename);

            $about_us->image1 = $filename;
        }

        if ($request->hasFile('image2')) {

            $about_us_image = $request->file('image2');
            $filename = uniqid() . '.' . $about_us_image->extension('image2');
            $location = public_path('uploads/aboutus');
            $about_us_image->move($location, $filename);

            $about_us->image2 = $filename;
        }

        if ($request->hasFile('image3')) {

            $about_us_image = $request->file('image3');
            $filename = uniqid() . '.' . $about_us_image->extension('image3');
            $location = public_path('uploads/aboutus');
            $about_us_image->move($location, $filename);

            $about_us->image3 = $filename;
        }

        $about_us->save();

        return redirect()->route('about_us')->withSuccess('Updated successfully');
    }


}
