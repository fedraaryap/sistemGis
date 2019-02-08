<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\JumlahSdmDesa;

class JumlahSdmDesaController extends Controller
{
   
    public function index()
    {
        $data = JumlahSdmDesa::all();
        return view('DataInduk.jumlahsdmdesa.index',compact('data'));
    }


    public function create()
    {
        $SdmDesa = JumlahSdmDesa::all();
        $JenisKelamin = JumlahSdmDesa::all();
        return view('DataInduk.jumlahsdmdesa.create',compact('SdmDesa','JenisKelamin'));
    }

  
    public function store(Request $request)
    {
        $data = new JumlahSdmDesa;
        $data->id_sdm_desa = $request->id_sdm_desa;
        $data->jumlah_sdm = $request->jumlah_sdm;
        $data->jk_sdm = $request->jk_sdm;
        $data->save();
        return redirect()->route('jumsdmdesa');
    }

 
    public function edit($id)
    {
         $data = JumlahSdmDesa::findorfail($id);
         $SdmDesa =JumlahSdmDesa::all();
         $JenisKelamin = JumlahSdmDesa::all();
        return view('DataInduk.jumlahsdmdesa.edit',compact('data','SdmDesa','JenisKelamin'));
    }


    public function update(Request $request, $id)
    {
        $data = JumlahSdmDesa::findorfail($id);
        $data->id_sdm_desa = $request->id_sdm_desa;
        $data->jumlah_sdm = $request->jumlah_sdm;
        $data->jk_sdm = $request->jk_sdm;
        $data->save();
        return redirect()->route('jumsdmdesa');
    }

 
    public function destroy($id)
    {
        $data = JumlahSdmDesa::find($id);
        $data->delete();
        return redirect()->route('jumsdmdesa');
    }
}
