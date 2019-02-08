<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\KualitasUdara;

class KualitasUdaraController extends Controller
{
     public function index()
    {
        $data = KualitasUdara::all();
        return view('DataInduk.KualitasUdara.index',compact('data'));
    }


    public function create()
    {
        $SumberKualitas = KualitasUdara::all();
        return view('DataInduk.KualitasUdara.create',compact('SumberKualitas'));
    }

  
    public function store(Request $request)
    {
        $data = new KualitasUdara;
        $data->id_sumber = $request->id_sumber;
        $data->jumlah_lokasi_pencemaran = $request->jumlah_lokasi_pencemaran;
        $data->politan_pencemaran = $request->politan_pencemaran;
        $data->efek = $request->efek;
        $data->kepemilikan_pemda_swasta = $request->kepemilikan_pemda_swasta;
        $data->save();
        return redirect()->route('udara');
    }

 
    public function edit($id)
    {
         $data = KualitasUdara::findorfail($id);
         $SumberKualitas =KualitasUdara::all();
        return view('DataInduk.KualitasUdara.edit',compact('data','SumberKualitas'));
    }


    public function update(Request $request, $id)
    {
        $data = KualitasUdara::findorfail($id);
        $data->id_sumber = $request->id_sumber;
        $data->jumlah_lokasi_pencemaran = $request->jumlah_lokasi_pencemaran;
        $data->politan_pencemaran = $request->politan_pencemaran;
        $data->efek = $request->efek;
        $data->kepemilikan_pemda_swasta = $request->kepemilikan_pemda_swasta;
        $data->save();
        return redirect()->route('udara');
    }

 
    public function destroy($id)
    {
        $data = KualitasUdara::find($id);
        $data->delete();
        return redirect()->route('udara');
    }
}
