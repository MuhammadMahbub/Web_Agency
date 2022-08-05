<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Support\Str;

class ServiceController extends Controller
{

    public function index()
    {

        $all_service_data = Service::all();
        return view('admin.service.index', compact('all_service_data'));
    }

    public function create()
    {
        return view('admin.service.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_name'                => 'required',
            'service_short_description'   => 'required',
            'service_long_description'   => 'nullable:service',
            'service_icon'                => 'image|required',
            'service_image'               => 'image'
        ]);

        $service_slug = Str::slug($request->service_name).'-'.Str::random(5);

        $services = Service::create($request->except('_token') + ['created_at' => Carbon::now(), 'service_slug' => $service_slug, 'service_icon' => 'default_service_icon.png', 'service_image' => 'default_service_img.jpg']);

        // Service icon save
        if($request->file('service_icon')){

            $service_icon           = $request->file('service_icon');
            $sevice_icon_name       = $services->id . time() . 'service_icon.' . $service_icon->extension('service_icon');
            $path                    = public_path('uploads/images/service');
            $service_icon->move($path, $sevice_icon_name);
            $services->service_icon = $sevice_icon_name;

            $services->save();
        }
        
        // Service image save
        if($request->file('service_image')){

            $service_image           = $request->file('service_image');
            $sevice_image_name       = $services->id . time() . 'service_img.' . $service_image->extension('service_icon');
            $path                    = public_path('uploads/images/service');
            $service_image->move($path, $sevice_image_name);
            $services->service_image = $sevice_image_name;

            $services->save();
        }



        return redirect()->route('service.index')->with('success', 'Data Upload Successfully');
    }


    public function edit($service_id)
    {
        $single_service_data = Service::find($service_id);
        return view('admin.service.edit', compact('single_service_data'));
    }


    public function update(Request $request, $service_id)
    {

        $services = Service::find($service_id);

        $request->validate([
            'service_name'                => 'required',
            'service_short_description'   => 'required',
            'service_icon'                => 'image',
            'service_image'               => 'image',
        ]);

        // Service image update
        if($request->file('service_image')){

            $service_image           = $request->file('service_image');
            $sevice_image_name       = $services->id . time() . 'service_img.'.$service_image->extension('service_image');
            $path                    = public_path('uploads/images/service');
            $service_image->move($path, $sevice_image_name);
            $services->service_image = $sevice_image_name;
        }
        
        // Service icon update
        if($request->file('service_icon')){

            $service_icon           = $request->file('service_icon');
            $sevice_icon_name       = $services->id . time() . 'service_icon.' . $service_icon->extension('service_icon');
            $path                    = public_path('uploads/images/service');
            $service_icon->move($path, $sevice_icon_name);
            $services->service_icon = $sevice_icon_name;
        }

        $services->service_name                = $request->service_name;
        $services->service_short_description   = $request->service_short_description;
        $services->service_long_description    = $request->service_long_description;
        $services->save();

        return redirect()->route('service.index')->with('success', 'Data Update Successfully!');
    }

    public function show($service_id){

        $get_single_service_data = Service::find($service_id);
        return view('admin.service.show', compact('get_single_service_data'));
    }

    public function delete($service_id)
    {
        Service::find($service_id)->delete();
        return back()->with('success', 'Service Delete Successfully!');
    }
}

