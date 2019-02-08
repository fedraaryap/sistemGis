<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\JumlahAngkutan;

class JumlahAngkutanController extends Controller
{
   
  
    public function index()
    {
        $data = JumlahAngkutan::all();
        return view('DataInduk.jumlahangkutan.index',compact('data'));
    }


    public function create()
    {
        $JenisAngkutan = JumlahAngkutan::all();
        return view('DataInduk.jumlahangkutan.create',compact('JenisAngkutan'));
    }

  
    public function store(Request $request)
    {
        $data = new JumlahAngkutan;
        $data->id_jenis_angkutan = $request->id_jenis_angkutan;
        $data->jumlah_pemilik = $request->jumlah_pemilik;
        $data->jumlah_kapasitas = $request->jumlah_kapasitas;
        $data->jumlah_unit_angkutan = $request->jumlah_unit_angkutan;
        $data->tenaga_kerja_angkutan = $request->tenaga_kerja_angkutan;

        $data->save();
        return redirect()->route('jumangkut');
    }

 
    public function edit($id)
    {
         $data = JumlahAngkutan::findorfail($id);
         $JenisAngkutan =JumlahAngkutan::all();
        return view('DataInduk.jumlahangkutan.edit',compact('data','JenisAngkutan'));
    }


    public function update(Request $request, $id)
    {
        $data = JumlahAngkutan::findorfail($id);
        $data->id_jenis_angkutan = $request->id_jenis_angkutan;
        $data->jumlah_pemilik = $request->jumlah_pemilik;
        $data->jumlah_kapasitas = $request->jumlah_kapasitas;
        $data->jumlah_unit_angkutan = $request->jumlah_unit_angkutan;
        $data->tenaga_kerja_angkutan = $request->tenaga_kerja_angkutan;

        $data->save();
        return redirect()->route('jumangkut');
    }

 
    public function destroy($id)
    {
        $data = JumlahAngkutan::find($id);
        $data->delete();
        return redirect()->route('jumangkut');
    }
}
