<?php

namespace App\Http\Controllers\Referensi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Referensi\SaranaTransportasi;


class SaranaTransportasiController extends Controller
{
    public function index()
    {
        $data = SaranaTransportasi::all();
        return view('referensi.transportasi.index',compact('data'));
    }

    public function create()
    {
        $transportasi = SaranaTransportasi::all();
        return view('referensi.transportasi.create',compact('transportasi'));
    }
    
    public function store(Request $request)
    {
        $data = new SaranaTransportasi();
        $data->Sar_id_sarana_transportasi = $request->Sar_id_sarana_transportasi;
        $data->jenis_sarana_transportasi= $request->jenis_sarana_transportasi;
        $data->save();
        return redirect()->route('transportasi');
    }

    public function edit($id)
    {
        $transportasi = SaranaTransportasi::all();
        $data = SaranaTransportasi::findOrFail($id);  
        return view('referensi.wilayah_lahan.edit',compact('data','transportasi'));
    }

    public function update(Request $request, $id)
    {
        $data = SaranaTransportasi::findorfail($id);
        $data->Sar_id_sarana_transportasi = $request->Sar_id_sarana_transportasi;
        $data->jenis_sarana_transportasi= $request->jenis_sarana_transportasi;
        $data->save();
        return redirect()->route('transportasi');
    }

    public function destroy($id)
    {
        $data = SaranaTransportasi::find($id);
        $data->delete();
        return redirect()->route('transportasi');
    }
}
