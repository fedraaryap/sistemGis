<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\PakanTernak;

class PakanTernakController extends Controller
{
    public function index()
    {
        $data = PakanTernak::all();
        return view('DataInduk.PakanTernak.index',compact('data'));
    }

    public function create()
    {
        $Kepemilikan = PakanTernak::all();
        return view('DataInduk.PakanTernak.create',compact('Kepemilikan'));
    }

  
    public function store(Request $request)
    {
        $data = new PakanTernak;
        $data->id_status_kepemilikan = $request->id_status_kepemilikan;
        $data->ket_pakan_ternak = $request->ket_pakan_ternak;
        $data->jumlah_luas = $request->jumlah_luas;
        $data->save();
        return redirect()->route('pakan');
    }

 
    public function edit($id)
    {
         $data = PakanTernak::findorfail($id);
         $Kepemilikan =PakanTernak::all();
        return view('DataInduk.PakanTernak.edit',compact('data','Kepemilikan'));
    }


    public function update(Request $request, $id)
    {
        $data = PakanTernak::findorfail($id);
        $data->id_status_kepemilikan = $request->id_status_kepemilikan;
        $data->ket_pakan_ternak = $request->ket_pakan_ternak;
        $data->jumlah_luas = $request->jumlah_luas;
        $data->save();
        return redirect()->route('pakan');
    }

 
    public function destroy($id)
    {
        $data = PakanTernak::find($id);
        $data->delete();
        return redirect()->route('pakan');
    }
}
