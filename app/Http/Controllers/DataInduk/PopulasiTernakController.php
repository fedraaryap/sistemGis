<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\PopulasiTernak;
use App\Model\Referensi\JenisTernak;

class PopulasiTernakController extends Controller
{
    public function index()
    {
        $data = PopulasiTernak::all();
        return view('DataInduk.PopilasiTernak.index',compact('data'));
    }

    public function create()
    {
        $JenisTernak = JenisTernak::all();
        return view('DataInduk.PopilasiTernak.create',compact('JenisTernak'));
    }

  
    public function store(Request $request)
    {
        $data = new PopulasiTernak;
        $data->id_desa =$request->id_desa;
        $data->id_jenis_ternak = $request->id_jenis_ternak;
        $data->jumlah_pemilik = $request->jumlah_pemilik;
        $data->jumlah_populasi = $request->jumlah_populasi;
        $data->save();
        return redirect()->route('populasi');
    }

 
    public function edit($id)
    {
         $data = PopulasiTernak::findorfail($id);
         $JenisTernak =JenisTernak::all();
        return view('DataInduk.PopilasiTernak.edit',compact('data','JenisTernak'));
    }


    public function update(Request $request, $id)
    {
        $data = PopulasiTernak::findorfail($id);
        $data->id_desa =$request->id_desa;
        $data->id_jenis_ternak = $request->id_jenis_ternak;
        $data->jumlah_pemilik = $request->jumlah_pemilik;
        $data->jumlah_populasi = $request->jumlah_populasi;
        $data->save();
        return redirect()->route('populasi');
    }

 
    public function destroy($id)
    {
        $data = PopulasiTernak::find($id);
        $data->delete();
        return redirect()->route('populasi');
    }
}
