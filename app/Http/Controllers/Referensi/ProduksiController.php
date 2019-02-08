<?php

namespace App\Http\Controllers\Referensi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Referensi\Produksi;

class ProduksiController extends Controller
{
  public function index()
    {
        $data = Produksi::all();
        return view('referensi.produksi.index', compact('data'));
    }

 
    public function create()
    {
        $produk = Produksi::all();
        return view('referensi.produksi.create', compact('produk'));
    }

    public function store(Request $request)
    {
        $data = new Produksi();
        $data->pro_id_produksi = $request->pro_id_produksi;
        $data->nama_produksi = $request->nama_produksi;
        $data->save();
        return redirect()->route('produksi');
    }

 
    public function edit($id)
    {
        $data = Produksi::findorfail($id);
        $produk = Produksi::all();
        return view('referensi.produksi.create', compact('data','produk'));
    }

    public function update(Request $request, $id)
    {
        $data = Produksi::findorfail($id);
        $data->pro_id_produksi = $request->pro_id_produksi;
        $data->nama_produksi = $request->nama_produksi;
        $data->save();
        return redirect()->route('produksi');
    }


    public function destroy($id)
    {
        $data = Produksi::find($id);
        $data->delete();
        return redirect()->route('produksi');
    }
}
