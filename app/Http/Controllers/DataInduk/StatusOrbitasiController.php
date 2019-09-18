<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\StatusOrbitasi;

class StatusOrbitasiController extends Controller
{
     public function index()
    {
        $data = StatusOrbitasi::all();
        return view('DataInduk.statusorbitasi.index',compact('data'));
    }

    public function create()
    {
      
        $Orbitasi = StatusOrbitasi::all();
        $SatuanOrbitasi = StatusOrbitasi::all();
        $Status = StatusOrbitasi::all();

        return view('DataInduk.statusorbitasi.create',compact('Orbitasi','SatuanOrbitasi','Status'));
    }
    
    public function store(Request $request)
    {
        $data = new StatusOrbitasi();
        $data->id_desa =$request->id_desa;
        $data->id_satuan_orbitasi = $request->id_satuan_orbitasi;
        $data->id_orbitasi = $request->id_orbitasi;
        $data->status_angka = $request->status_angka;
        $data->save();
        return redirect()->route('statorbitasi');
    }

    public function edit($id)
    {
        $data = StatusOrbitasi::findorfail($id);
        $Orbitasi = StatusOrbitasi::all();
        $SatuanOrbitasi = StatusOrbitasi::all();
        $Status = StatusOrbitasi::all();
        return view('DataInduk.statusorbitasi.edit',compact('data','Orbitasi','SatuanOrbitasi','Status'));
    }

    public function update(Request $request, $id)
    {
        $data = StatusOrbitasi::findorfail($id);
        $data->id_desa =$request->id_desa;
        $data->id_satuan_orbitasi = $request->id_satuan_orbitasi;
        $data->id_orbitasi = $request->id_orbitasi;
        $data->status_angka = $request->status_angka;
        $data->save();
        return redirect()->route('statorbitasi');
    }

    public function destroy($id)
    {
        $data = StatusOrbitasi::find($id);
        $data->delete();
        return redirect()->route('statorbitasi');
    }
}
