<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\LembagaPendidikan;

class LembagaPendidikanController extends Controller
{
   
    public function index()
    {
        $data = LembagaPendidikan::all();
        return view('DataInduk.LembagaPendidikan.index',compact('data'));
    }


    public function create()
    {
        $Sekolah = LembagaPendidikan::all();
        $Status = LembagaPendidikan::all();
        return view('DataInduk.LembagaPendidikan.create',compact('Sekolah','Status'));
    }

    
    public function store(Request $request){
        $data = new LembagaPendidikan();
        $data->status_sekolah = $request->status_sekolah;
        $data->id_sekolah = $request->id_sekolah;
        $data->jumlah_sekolah = $request->jumlah_sekolah;
        $data->jumlah_pengajar = $request->jumlah_pengajar;
        $data->jumlah_siswa = $request->jumlah_siswa;
        $data->kepemilikan = $request->kepemilikan;
        $data->save();
        return redirect()->route('lemp');

    }

    public function edit($id)
    {
        $data = LembagaPendidikan::findorfail($id);
        $Sekolah = LembagaPendidikan::all();
        $Status = LembagaPendidikan::all();
        return view('DataInduk.LembagaPendidikan.edit',compact('data','Sekolah','Status'));
    }

  
    public function update(Request $request, $id)
    {
        $data = LembagaPendidikan::findorfail($id);
         $data->status_sekolah = $request->status_sekolah;
        $data->id_sekolah = $request->id_sekolah;
        $data->jumlah_sekolah = $request->jumlah_sekolah;
        $data->jumlah_pengajar = $request->jumlah_pengajar;
        $data->jumlah_siswa = $request->jumlah_siswa;
        $data->kepemilikan = $request->kepemilikan;
        $data->save();
        return redirect()->route('lemp');
    }

  
    public function destroy($id)
    {
        $data = LembagaPendidikan::find($id);
        $data->delete();
        return redirect()->route('lemp');
    }
}
