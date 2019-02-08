<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\KualitasAngkatan;

class KualitasAngkatanController extends Controller
{
     public function index()
    {
        $data = KualitasAngkatan::all();
        return view('DataInduk.KualitasAngkatan.index',compact('data'));
    }


    public function create()
    {
        $RangeAngkatan = KualitasAngkatan::all();
        $JenisKelamin = KualitasAngkatan::all();
        return view('DataInduk.KualitasAngkatan.create',compact('RangeAngkatan','JenisKelamin'));
    }

  
    public function store(Request $request)
    {
        $data = new KualitasAngkatan;
        $data->id_range = $request->id_range;
        $data->jenis_angkatan = $request->jenis_angkatan;
        $data->jk_angkatan = $request->jk_angkatan;
        $data->save();
        return redirect()->route('angkatan');
    }

 
    public function edit($id)
    {
         $data = KualitasAngkatan::findorfail($id);
         $RangeAngkatan =KualitasAngkatan::all();
          $JenisKelamin = KualitasAngkatan::all();
        return view('DataInduk.KualitasAngkatan.edit',compact('data','RangeAngkatan','JenisKelamin'));
    }


    public function update(Request $request, $id)
    {
        $data = KualitasAngkatan::findorfail($id);
        $data->id_range = $request->id_range;
        $data->jenis_angkatan = $request->jenis_angkatan;
        $data->jk_angkatan = $request->jk_angkatan;
        $data->save();
        return redirect()->route('angkatan');
    }

 
    public function destroy($id)
    {
        $data = KualitasAngkatan::find($id);
        $data->delete();
        return redirect()->route('angkatan');
    }
}
