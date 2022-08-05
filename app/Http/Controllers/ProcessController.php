<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Process;
use Carbon\Carbon;

class ProcessController extends Controller
{
    public function index()
    {
        $processes = Process::all();
        return view('my.process.index', compact('processes'));
    }

    public function create()
    {
        return view('my.process.create');
    }

    public function store(Request $request)
    {
        $process = new Process;

        $request->validate([
            'title'          => 'required',
            'description'    => 'required',
            'process_photo' => 'image|required'
        ]);

        if ($request->hasFile('process_photo')) {

            $process_photo  = $request->file('process_photo');
            $filename       = uniqid() . '.' . $process_photo->extension('process_photo');
            $location       = public_path('uploads/process_photo/');

            $process_photo->move($location, $filename);

            $process->process_photo = $filename;
        }

        $process->title       = $request->title;
        $process->description = $request->description;
        $process->button_text = $request->button_text;
        $process->button_url = $request->button_url;
        $process->created_at  = Carbon::now();

        $process->save();

        return redirect()->route('process.index')->withSuccess('Created successfully');
    }

    public function show($id)
    {
        $process = Process::find($id);
        return view('my.process.show', compact('process'));
    }

    public function edit(Process $process)
    {
        return view('my.process.edit', compact('process'));
    }

    public function update(Request $request, Process $process)
    {

        $request->validate([
            'title'          => 'required',
            'description'    => 'required',
            'process_photo' => 'image'
        ]);

        if ($request->hasFile('process_photo')) {

            $process_photo = $request->file('process_photo');
            $filename = uniqid() . '.' . $process_photo->extension('process_photo');
            $location = public_path('uploads/process_photo/');
            $process_photo->move($location, $filename);

            $process->process_photo = $filename;
        }

        $process->title       = $request->title;
        $process->description = $request->description;
        $process->button_text = $request->button_text;
        $process->button_url = $request->button_url;

        $process->save();

        return redirect()->route('process.index')->withSuccess('Updated successfully');
    }


    public function destroy(Process $process)
    {
        $process->delete();

        return redirect()->route('process.index')->with('warning', 'Deleted successfully');
    }
}
