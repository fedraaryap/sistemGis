<?php

namespace App\Http\Controllers\Referensi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Referensi\SumberAir;

class SumberAirController extends Controller
{
    public function index()
    {
        $data = SumberAir::all();
        return view('referensi.sumber_air.index',compact('data'));
    }


    public function create()
    {
        $air = SumberAir::all();
        return view('referensi.sumber_air.create',compact('air'));   
    }

   
    public function store(Request $request)
    {
        $data = new SumberAir();
        $data->sum_id_sumber_air = $request->sum_id_sumber_air;
        $data->sumber_air = $request->sumber_air;
        $data->save();
        return redirect()->route('sumber_air');
    }

 
    public function edit($id)
    {
         $data = SumberAir::findorfail($id);
         $air = SumberAir::all();
        return view('referensi.sumber_air.edit',compact('data','air'));
    }


    public function update(Request $request, $id)
    {
        $data = SumberAir::findorfail($id);
        $data->sum_id_sumber_air = $request->sum_id_sumber_air;
        $data->sumber_air = $request->sumber_air;
        $data->save();
        return redirect()->route('sumber_air');
    }
        
         public function destroy($id)
    {
        $data = SumberAir::find($id);
        $data->delete();
        return redirect()->route('sumber_air');
    }
}
