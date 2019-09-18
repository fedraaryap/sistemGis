<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\LembagaKeamanan;
use App\Model\Referensi\JenisKeamanan;

class LembagaKeamananController extends Controller
{

    public function index()
    {
        $data = LembagaKeamanan::get();
        return view('DataInduk.Lembagakeamanan.index',compact('data'));
    }


    public function create()
    {
        $JenisKeamanan = JenisKeamanan::all();
        $Status = LembagaKeamanan::all();
        return view('DataInduk.Lembagakeamanan.create',compact('JenisKeamanan','Status'));
    }

  
    public function store(Request $request)
    {
        $data = new LembagaKeamanan;
        $data->id_desa = $request->id_desa;
        $data->id_jenis_keamanan = $request->id_jenis_keamanan;
        $data->jumlah_anggota = $request->jumlah_anggota;
        $data->jumlah_poskamling = $request->jumlah_poskamling;
        $data->jumlah_kegiaatan = $request->jumlah_kegiaatan;
        $data->nama_organisasi_induk = $request->nama_organisasi_induk;
        $data->status = $request->status;
        $data->save();
        return redirect()->route('lemkeamanan');
    }

 
    public function edit($id)
    {
         $data = LembagaKeamanan::findorfail($id);
         $JenisKeamanan =JenisKeamanan::all();
         $Status = LembagaKeamanan::all();
        return view('DataInduk.Lembagakeamanan.edit',compact('data','JenisKeamanan','Status'));
    }


    public function update(Request $request, $id)
    {
        $data = LembagaKeamanan::findorfail($id);
        $data->id_desa = $request->id_desa;
        $data->id_jenis_keamanan = $request->id_jenis_keamanan;
        $data->jumlah_anggota = $request->jumlah_anggota;
        $data->jumlah_poskamling = $request->jumlah_poskamling;
        $data->jumlah_kegiaatan = $request->jumlah_kegiaatan;
        $data->nama_organisasi_induk = $request->nama_organisasi_induk;
        $data->status = $request->status;
        $data->save();
        return redirect()->route('lemkeamanan');
    }

 
    public function destroy($id)
    {
        $data = LembagaKeamanan::find($id);
        $data->delete();
        return redirect()->route('lemkeamanan');
    }
}
