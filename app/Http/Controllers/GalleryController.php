<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryName;
use App\Models\Service;
use Illuminate\Http\Request;
use Carbon\Carbon;

class GalleryController extends Controller
{

    public function gallery_name_index()
    {
        return view('my.gallery.name_index', [
            'gallery_name' => GalleryName::all(),

        ]);
    }

    public function gallery_name_create()
    {
        return view('my.gallery.name_create');
    }

    public function gallery_name_store(Request $request)
    {
        $request->validate([
            'gallery_name' => 'required|unique:gallery_names,gallery_name',
        ]);

        GalleryName::insert([
            'gallery_name' => $request->gallery_name,
            'created_at'   => Carbon::now(),
        ]);

        return redirect()->route('gallery_name.index');
    }

    public function gallery_name_destroy($id)
    {
        Gallery::where('gallery_name_id',$id)->delete();
        GalleryName::find($id)->delete();
        return redirect()->route('gallery_name.index')->with('warning', 'Data destroyed');
    }

    public function index()
    {
        return view('my.gallery.index', [
            'galleries' => Gallery::all(),
            'gallery_names' => GalleryName::all(),
        ]);
    }

    public function create()
    {
        return view('my.gallery.create', [
            'gallery_names' => GalleryName::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'gallery_name_id' => 'required',
            'gallery_title'   => 'required',
            'gallery_photo'   => 'required'
        ]);

        foreach ($request->file('gallery_photo') as $photo) {
            // $file = $request->file('gallery_photos');
            $ext = $photo->extension('gallery_photo');
            $gallery_photo_name =   uniqid() . '.' . $ext;
            $location = public_path('uploads/gallery_photos');

            $photo->move($location, $gallery_photo_name);

            Gallery::insert([
                'gallery_name_id' => $request->gallery_name_id,
                'gallery_title' => $request->gallery_title,
                'gallery_photo' => $gallery_photo_name,
                'created_at'   => Carbon::now(),
            ]);
        }

        return redirect()->route('gallery.index')->withSuccess('Data Stored');
    }

    public function show(Gallery $gallery)
    {
        //
    }

    public function edit(Gallery $gallery)
    {
        //
    }

    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->route('gallery.index')->with('warning', 'Data destroyed');
    }
}
