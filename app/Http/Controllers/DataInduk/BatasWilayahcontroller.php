<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\BatasWilayah;
use App\Model\Referensi\Batas;

class BatasWilayahcontroller extends Controller
{

    public function index()
    {
        $data = BatasWilayah::all();
        return view('DataInduk.BatasWilayah.index',compact('data'));
    }


    public function create()
    {
        $Batas = Batas::all();
        return view('DataInduk.BatasWilayah.create',compact('Batas'));
    }

  
    public function store(Request $request)
    {
        $data = new BatasWilayah();
        $data->id_desa =$request->id_desa;
        $data->id_batas = $request->id_batas;
        $data->batas_desa = $request->batas_desa;
        $data->batas_kecamatan = $request->batas_kecamatan;
        $data->save();
        return redirect()->route('bataswil');
    }

 
    public function edit($id)
    {
         $data = BatasWilayah::findorfail($id);
         $Batas = Batas::all();
        return view('DataInduk.BatasWilayah.edit',compact('data','Batas'));
    }


    public function update(Request $request, $id)
    {
        $data = BatasWilayah::findorfail($id);
        $data->id_desa =$request->id_desa;
        $data->id_batas = $request->id_batas;
        $data->batas_desa = $request->batas_desa;
        $data->batas_kecamatan = $request->batas_kecamatan;
        $data->save();
        return redirect()->route('bataswil');
    }

 
    public function destroy($id)
    {
        $data = BatasWilayah::find($id);
        $data->delete();
        return redirect()->route('bataswil');
    }
}
