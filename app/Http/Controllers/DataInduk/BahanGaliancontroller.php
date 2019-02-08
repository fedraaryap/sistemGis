<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\BahanGalian;

class BahanGaliancontroller extends Controller
{
 
    public function index()
    {
        $data = BahanGalian::all();
        return view('DataInduk.BahanGalian.index',compact('data'));
    }


    public function create()
    {
        $kepemilikan = BahanGalian::all();
        return view('DataInduk.BahanGalian.create',compact('kepemilikan'));
    }

  
    public function store(Request $request)
    {
        $data = new BahanGalian();
        $data->id_status_kepemilikan = $request->id_status_kepemilikan;
        $data->jenis_galian = $request->jenis_galian;
        $data->deposit_produksi = $request->deposit_produksi;
        $data->save();
        return redirect()->route('galian');
    }

 
    public function edit($id)
    {
         $data = BahanGalian::findorfail($id);
         $kepemilikan = BahanGalian::all();
        return view('DataInduk.BahanGalian.edit',compact('data','kepemilikan'));
    }


    public function update(Request $request, $id)
    {
        $data = new BahanGalian();
        $data->id_status_kepemilikan = $request->id_status_kepemilikan;
        $data->jenis_galian = $request->jenis_galian;
        $data->deposit_produksi = $request->deposit_produksi;
        $data->save();
        return redirect()->route('galian');
    }

      public function destroy($id)
    {
        $data = BahanGalian::find($id);
        $data->delete();
        return redirect()->route('galian');
    }

}