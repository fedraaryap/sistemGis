<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\Tahun;

class TahunController extends Controller
{
    public function index()
    {
        $data = Tahun::all();
        return view('DataInduk.Tahun.index',compact('data'));
    }

    public function create()

    {
        $Aktif = Tahun::all();
        return view('DataInduk.Tahun.create',compact('Aktif'));
    }

  
    public function store(Request $request)
    {
        $data = new Tahun();
        $data->id_tahun = $request->id_tahun;
        $data->waktu_mulai = $request->waktu_mulai;
        $data->waktu_akhir = $request->waktu_akhir;
        $data->aktif = $request->aktif;
        $data->save();
        return redirect()->route('tahun');
    }

 
    public function edit($id)
    {
         $data = Tahun::findorfail($id);
         $Aktif = Tahun::all();
        return view('DataInduk.Tahun.edit',compact('data','Aktif'));
    }


    public function update(Request $request, $id)
    {
        $data = Tahun::findorfail($id);
        $data->waktu_mulai = $request->waktu_mulai;
        $data->waktu_akhir = $request->waktu_akhir;
        $data->aktif = $request->aktif;
        $data->save();
        return redirect()->route('tahun');
    }

 
    public function destroy($id)
    {
        $data = Tahun::find($id);
        $data->delete();
        return redirect()->route('tahun');
    }
}
