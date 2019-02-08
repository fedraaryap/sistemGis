<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\JumlahOrang;

class JumlahOrangController extends Controller
{
   public function index()
    {
        $data = JumlahOrang::all();
        return view('DataInduk.JumlahOrang.index',compact('data'));
    }


    public function create()
    {
        $LembagaEkonomi = JumlahOrang::all();
        return view('DataInduk.JumlahOrang.create',compact('LembagaEkonomi'));
    }

  
    public function store(Request $request)
    {
        $data = new JumlahOrang;
        $data->id_lembaga_ekonomi = $request->id_lembaga_ekonomi;
        $data->jumlah_pengurus = $request->jumlah_pengurus;
        $data->jumlah_anggota = $request->jumlah_anggota;
        $data->jumlah_kegiatan = $request->jumlah_kegiatan;
        $data->jumlah_unit_lembaga = $request->jumlah_unit_lembaga;
        $data->save();
        return redirect()->route('orang');
    }

 
    public function edit($id)
    {
         $data = JumlahOrang::findorfail($id);
         $LembagaEkonomi =JumlahOrang::all();
        return view('DataInduk.JumlahOrang.edit',compact('data','LembagaEkonomi'));
    }


    public function update(Request $request, $id)
    {
        $data = JumlahOrang::findorfail($id);
        $data->id_lembaga_ekonomi = $request->id_lembaga_ekonomi;
        $data->jumlah_pengurus = $request->jumlah_pengurus;
        $data->jumlah_anggota = $request->jumlah_anggota;
        $data->jumlah_kegiatan = $request->jumlah_kegiatan;
        $data->jumlah_unit_lembaga = $request->jumlah_unit_lembaga;
        $data->save();
        return redirect()->route('orang');
    }

 
    public function destroy($id)
    {
        $data = JumlahOrang::find($id);
        $data->delete();
        return redirect()->route('orang');
    }
}
