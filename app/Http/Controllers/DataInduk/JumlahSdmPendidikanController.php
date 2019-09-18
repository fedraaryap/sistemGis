<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\JumlahSdmPendidikan;
use App\Model\Referensi\StatusPendidikan;

class JumlahSdmPendidikanController extends Controller
{
     public function index()
    {
        $data = JumlahSdmPendidikan::get();
        return view('DataInduk.jumlahsdmpendidikan.index',compact('data'));
    }


    public function create()
    {
        $StatusPendidikan = StatusPendidikan::all();
        $JenisKelamin = JumlahSdmPendidikan::all();
        return view('DataInduk.jumlahsdmpendidikan.create',compact('StatusPendidikan','JenisKelamin'));
    }

  
    public function store(Request $request)
    {
        $data = new JumlahSdmPendidikan;
        $data->id_desa =$request->id_desa;
        $data->id_status_pendidikan = $request->id_status_pendidikan;
        $data->jk_pendidikan = $request->jk_pendidikan;
        $data->jumlah_sdm_pendidikan = $request->jumlah_sdm_pendidikan;
        $data->save();
        return redirect()->route('jumsdmpend');
    }

 
    public function edit($id)
    {
         $data = JumlahSdmPendidikan::findorfail($id);
         $StatusPendidikan =StatusPendidikan::all();
         $JenisKelamin = JumlahSdmPendidikan::all();
        return view('DataInduk.jumlahsdmpendidikan.edit',compact('data','StatusPendidikan','JenisKelamin'));
    }


    public function update(Request $request, $id)
    {
        $data = JumlahSdmPendidikan::findorfail($id);
        $data->id_desa =$request->id_desa;
        $data->id_status_pendidikan = $request->id_status_pendidikan;
        $data->jk_pendidikan = $request->jk_pendidikan;
        $data->jumlah_sdm_pendidikan = $request->jumlah_sdm_pendidikan;
        $data->save();
        return redirect()->route('jumsdmpend');
    }

 
    public function destroy($id)
    {
        $data = JumlahSdmPendidikan::find($id);
        $data->delete();
        return redirect()->route('jumsdmpend');
    }
}
