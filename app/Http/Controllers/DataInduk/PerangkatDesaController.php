<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\PerangkatDesa;

class PerangkatDesaController extends Controller
{
    public function index()
    {
        $data = PerangkatDesa::all();
        return view('DataInduk.PerangkatDesa.index',compact('data'));
    }

    public function create()
    {
        $TahunAktif = PerangkatDesa::all();
        return view('DataInduk.PerangkatDesa.create',compact('TahunAktif'));
    }

  
    public function store(Request $request)
    {
        $data = new PakanTernak;
        $data->kepala_desa = $request->kepala_desa;
        $data->tahun_dimulai = $request->tahun_dimulai;
        $data->tahun_berakhir = $request->tahun_berakhir;
        $data->periode = $request->periode;
        $data->a_tahun_aktif = $request->a_tahun_aktif;
        $data->tahun_aktif = $request->tahun_aktif;
        $data->save();
        return redirect()->route('perangkat');
    }

 
    public function edit($id)
    {
         $data = PakanTernak::findorfail($id);
         $TahunAktif = PerangkatDesa::all();
        return view('DataInduk.PerangkatDesa.edit',compact('data','TahunAktif'));
    }


    public function update(Request $request, $id)
    {
        $data = PakanTernak::findorfail($id);
        $data->kepala_desa = $request->kepala_desa;
        $data->tahun_dimulai = $request->tahun_dimulai;
        $data->tahun_berakhir = $request->tahun_berakhir;
        $data->periode = $request->periode;
        $data->a_tahun_aktif = $request->a_tahun_aktif;
        $data->tahun_aktif = $request->tahun_aktif;
        $data->save();
        return redirect()->route('perangkat');
    }

 
    public function destroy($id)
    {
        $data = PakanTernak::find($id);
        $data->delete();
        return redirect()->route('perangkat');
    }
}
