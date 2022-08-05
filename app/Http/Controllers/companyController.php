<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\company;

class companyController extends Controller
{
    public function index(){
        $data = company::first();
        return view('admin.company.index', compact('data'));
    }

    public function update(Request $request, $id){

        $request->validate([
            'title'         => 'required',
            'description'   => 'required',
            'button_text'   => 'required'
        ]);

        company::find($id)->update($request->except('_token'));
        return redirect()->route('company.index')->withSuccess('Data Update Done');
    }

}
