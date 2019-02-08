<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\LuasWilayah;

class LuasWilayahController extends Controller
{
    public function index()
    {
        $data = LuasWilayah::all();
        return view('DataInduk.LuasWilayah.index',compact('data'));
    }

      public function create()
    {
        $LuasWil = LuasWilayah::all();
        $SatuanWil = LuasWilayah::all();
        $A_memiliki =LuasWilayah::all();
        $Status = LuasWilayah::all();
        return view('DataInduk.LuasWilayah.create',compact('LuasWil','SatuanWil','A_memiliki','Status'));
    }

  
    public function store(Request $request)
    {
        $data = new LuasWilayah;
        $data->id_satuan = $request->id_satuan;
        $data->id_wilayah_lahan = $request->id_wilayah_lahan;
        $data->luas_wilayah = $request->luas_wilayah;
        $data->a_memiliki_nilai = $request->a_memiliki_nilai;
        $data->satus = $request->satus;
        $data->save();
        return redirect()->route('luas');
    }

 
    public function edit($id)
    {
         $data = LuasWilayah::findorfail($id);
         $LuasWil = LuasLahan::all();
         $SatuanWil = LuasLahan::all();
         $A_memiliki =LuasLahan::all();
         $Status = LuasLahan::all();
        return view('DataInduk.LuasWilayah.edit',compact('data','LuasWil','SatuanWil','A_memiliki','Status'));
    }


    public function update(Request $request, $id)
    {
        $data = LuasWilayah::findorfail($id);
        $data->id_satuan = $request->id_satuan;
        $data->id_wilayah_lahan = $request->id_wilayah_lahan;
        $data->luas_wilayah = $request->luas_wilayah;
        $data->a_memiliki_nilai = $request->a_memiliki_nilai;
        $data->satus = $request->satus;
        $data->save();
        return redirect()->route('luas');
    }

 
    public function destroy($id)
    {
        $data = LuasWilayah::find($id);
        $data->delete();
        return redirect()->route('luas');
    }
}
