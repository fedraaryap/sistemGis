<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\LuasLahan;

class LuasLahanController extends Controller
{
   public function index()
    {
        $data = LuasLahan::all();
        return view('DataInduk.luaslahan.index',compact('data'));
    }


    public function create()
    {
        $KetLahan = LuasLahan::all();
        return view('DataInduk.luaslahan.create',compact('KetLahan'));
    }

  
    public function store(Request $request)
    {
        $data = new LuasLahan;
        $data->id_ket_lahan = $request->id_ket_lahan;
        $data->pemilik_lahan = $request->pemilik_lahan;
        $data->luas_lahan = $request->luas_lahan;
        $data->save();
        return redirect()->route('luaslahan');
    }

 
    public function edit($id)
    {
         $data = LuasLahan::findorfail($id);
         $KetLahan =KualitasUdara::all();
        return view('DataInduk.luaslahan.edit',compact('data','KetLahan'));
    }


    public function update(Request $request, $id)
    {
        $data = LuasLahan::findorfail($id);
        $data->id_ket_lahan = $request->id_ket_lahan;
        $data->pemilik_lahan = $request->pemilik_lahan;
        $data->luas_lahan = $request->luas_lahan;
        $data->save();
        return redirect()->route('luaslahan');
    }

 
    public function destroy($id)
    {
        $data = LuasLahan::find($id);
        $data->delete();
        return redirect()->route('luaslahan');
    }
}
