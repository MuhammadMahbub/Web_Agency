<?php

namespace App\Http\Controllers;

use App\Models\Mstretegy;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MarketStretegyController extends Controller
{
    public function index(){
        $data = Mstretegy::first();
        return view('admin.stretegy.index', compact('data'));
    }

     public function update(Request $request, $id){

        $request->validate([
            'title'         => 'required',
            'description'   => 'required',
        ]);

        Mstretegy::find($id)->update($request->except('_token')+['updated_at'=>Carbon::now()]);
        return redirect()->back()->withSuccess('Data Update Success');
    }
}
