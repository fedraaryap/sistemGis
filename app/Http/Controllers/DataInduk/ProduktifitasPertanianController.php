<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\ProduktifitasPertanian;

class ProduktifitasPertanianController extends Controller
{
    public function index()
    {
        $data = ProduktifitasPertanian::all();
        return view('DataInduk.ProduktifitasPertanian.index',compact('data'));

    }

    public function create()
    {
        $Produktifitas = ProduktifitasPertanian::all();
        return view('DataInduk.ProduktifitasPertanian.create',compact('Produktifitas'));
    }

  
    public function store(Request $request)
    {
        $data = new ProduktifitasPertanian;
        $data->id_jenis_produktifitas = $request->id_jenis_produktifitas;
        $data->luas = $request->luas;
        $data->hasil = $request->hasil;
        $data->jenis_tanaman = $request->jenis_tanaman;
        $data->kepemilikan_pertanian = $request->kepemilikan_pertanian;
        $data->save();
        return redirect()->route('produkpert');
    }

 
    public function edit($id)
    {
         $data = ProduktifitasPertanian::findorfail($id);
         $Produktifitas = ProduktifitasPertanian::all();
        return view('DataInduk.ProduktifitasPertanian.edit',compact('data','Produktifitas'));
    }


    public function update(Request $request, $id)
    {
        $data = ProduktifitasPertanian::findorfail($id);
        $data->id_jenis_produktifitas = $request->id_jenis_produktifitas;
        $data->luas = $request->luas;
        $data->hasil = $request->hasil;
        $data->jenis_tanaman = $request->jenis_tanaman;
        $data->kepemilikan_pertanian = $request->kepemilikan_pertanian;
        $data->save();
        return redirect()->route('produkpert');
    }

 
    public function destroy($id)
    {
        $data = ProduktifitasPertanian::find($id);
        $data->delete();
        return redirect()->route('produkpert');
    }
}
