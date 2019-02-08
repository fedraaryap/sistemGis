<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\StatusJasaUsaha;

class StatusJasaUsahaController extends Controller
{
    public function index()
    {
        $data = StatusJasaUsaha::all();
        return view('DataInduk.statusjasausaha.index',compact('data'));
    }

    public function create()
    {
      
        $JasaUsaha = StatusJasaUsaha::all();
        return view('DataInduk.statusjasausaha.create',compact('JasaUsaha'));
    }
    
    public function store(Request $request)
    {
        $data = new StatusJasaUsaha();
        $data->id_jasa_usaha = $request->id_jasa_usaha;
        $data->jumlah_unit_usaha = $request->jumlah_unit_usaha;
        $data->jenis_produksi_kegiatan = $request->jenis_produksi_kegiatan;
        $data->tenaga_kerja_usaha = $request->tenaga_kerja_usaha;
        $data->save();
        return redirect()->route('statjasausaha');
    }

    public function edit($id)
    {
        $data = StatusJasaUsaha::findorfail($id);
        $JasaUsaha = StatusJasaUsaha::all();
        return view('DataInduk.statusjasausaha.edit',compact('data','JasaUsaha'));
    }

    public function update(Request $request, $id)
    {
        $data = StatusJasaUsaha::findorfail($id);
        $data->id_jasa_usaha = $request->id_jasa_usaha;
        $data->jumlah_unit_usaha = $request->jumlah_unit_usaha;
        $data->jenis_produksi_kegiatan = $request->jenis_produksi_kegiatan;
        $data->tenaga_kerja_usaha = $request->tenaga_kerja_usaha;
        $data->save();
        return redirect()->route('statjasausaha');
    }

    public function destroy($id)
    {
        $data = StatusJasaUsaha::find($id);
        $data->delete();
        return redirect()->route('statjasausaha');
    }
}
