<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.tests.index', [
            'data' => Test::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'image' => 'image',
        ]);

        $data = Test::create($request->except('_token') + ['created_at' => Carbon::now()]);

        if ($request->image) {
            $image = $request->file('image');
            $filename = $data->id . '-' . time() . '.' . $image->extension();
            $location = public_path('uploads/test/');
            $image->move($location, $filename);

            $data->image = $filename;
            $data->save();
        }

        return back()->withSuccess('Data saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        return view('admin.tests.show', compact('test'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        return view('admin.tests.edit', compact('test'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {

        $request->validate([
            'name'  => 'required',
            'image' => 'image',
        ]);



        if ($request->image) {
            $image = $request->file('image');
            $filename = $test->id . '-' . time() . '.' . $image->extension();
            $location = public_path('uploads/test/');
            $image->move($location, $filename);

            $test->image = $filename;
        }

        $test->name = $request->name;
        $test->save();

        return back()->withSuccess('Data updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        $test->delete();
        return back()->withDanger('Data destroyed');
    }
}
