<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\JumlahProduksi;

class JumlahProduksiController extends Controller
{
     public function index()
    {
        $data = JumlahProduksi::all();
        return view('DataInduk.jumlahproduksi.index',compact('data'));
    }


    public function create()
    {
        $Produksi = JumlahProduksi::all();
        return view('DataInduk.jumlahproduksi.create',compact('Produksi'));
    }

  
    public function store(Request $request)
    {
        $data = new JumlahProduksi;
        $data->id_produksi = $request->id_produksi;
        $data->jumlah_produksi = $request->jumlah_produksi;
        $data->save();
        return redirect()->route('jumproduksi');
    }

 
    public function edit($id)
    {
         $data = JumlahProduksi::findorfail($id);
         $Produksi =JumlahProduksi::all();
        return view('DataInduk.jumlahproduksi.edit',compact('data','Produksi'));
    }


    public function update(Request $request, $id)
    {
        $data = JumlahProduksi::findorfail($id);
        $data->id_produksi = $request->id_produksi;
        $data->jumlah_produksi = $request->jumlah_produksi;
        $data->save();
        return redirect()->route('jumproduksi');
    }

 
    public function destroy($id)
    {
        $data = JumlahOrang::find($id);
        $data->delete();
        return redirect()->route('jumproduksi');
    }
}
