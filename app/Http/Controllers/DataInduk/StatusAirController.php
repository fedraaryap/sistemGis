<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\StatusAir;

class StatusAirController extends Controller
{
    public function index()
    {
        $data = StatusAir::get();
        return view('DataInduk.StatusAir.index',compact('data'));
    }

    public function create()
    {
        $AirBersih = StatusAir::all();
        $AirPanas = StatusAir::all();
        $ApakahBersih = StatusAir::all();
        $ApakahPanas =StatusAir::all();
        return view('DataInduk.StatusAir.create',compact('AirBersih','AirPanas','ApakahBersih','AirPanas'));
    }
    
    public function store(Request $request)
    {
        $data = new StatusAir();
        $data->id_desa =$request->id_desa;
        $data->id_air_bersih = $request->id_air_bersih;
        $data->id_air_panas = $request->id_air_panas;
        $data->pemanfaatan = $request->pemanfaatan;
        $data->a_airpanas = $request->a_airpanas;
        $data->a_airbersih = $request->a_airbersih;
        $data->save();
        return redirect()->route('statair');
    }

    public function edit($id)
    {
        $data = StatusAir::findorfail($id);
        $AirBersih = SStatusAir::all();
        $AirPanas = StatusAir::all();
        $ApakahBersih = StatusAir::all();
        $ApakahPanas =StatusAir::all();
        return view('DataInduk.StatusAir.edit',compact('data','AirBersih','AirPanas','ApakahBersih','AirPanas'));
    }

    public function update(Request $request, $id)
    {
        $data = StatusAir::findorfail($id);
        $data->id_desa =$request->id_desa;
        $data->id_air_bersih = $request->id_air_bersih;
        $data->id_air_panas = $request->id_air_panas;
        $data->pemanfaatan = $request->pemanfaatan;
        $data->a_airpanas = $request->a_airpanas;
        $data->a_airbersih = $request->a_airbersih;
        $data->save();
        return redirect()->route('statair');
    }

    public function destroy($id)
    {
        $data = StatusAir::find($id);
        $data->delete();
        return redirect()->route('statair');
    }
}
