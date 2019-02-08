<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\JumlahLembagaPolitik;

class JumlahLembagaPolitikController extends Controller
{
     public function index()
    {
        $data = JumlahLembagaPolitik::all();
        return view('DataInduk.JumlahLembagaPolitik.index',compact('data'));
    }


    public function create()
    {
        $Partai = JumlahLembagaPolitik::all();
        return view('DataInduk.JumlahLembagaPolitik.create',compact('Partai'));
    }

  
    public function store(Request $request)
    {
        $data = new JumlahLembagaPolitik;
        $data->id_partai = $request->id_partai;
        $data->pengurus = $request->pengurus;
        $data->anggota = $request->anggota;
        $data->pemilu_terakhir = $request->pemilu_terakhir;
        $data->save();
        return redirect()->route('jumlempolitik');
    }

 
    public function edit($id)
    {
         $data = JumlahLembagaPolitik::findorfail($id);
         $Partai =JumlahLembagaPolitik::all();
        return view('DataInduk.JumlahLembagaPolitik.edit',compact('data','Partai'));
    }


    public function update(Request $request, $id)
    {
        $data = JumlahLembagaPolitik::findorfail($id);
        $data->id_partai = $request->id_partai;
        $data->pengurus = $request->pengurus;
        $data->anggota = $request->anggota;
        $data->pemilu_terakhir = $request->pemilu_terakhir;

        $data->save();
        return redirect()->route('jumlempolitik');
    }

 
    public function destroy($id)
    {
        $data = JumlahLembagaPolitik::find($id);
        $data->delete();
        return redirect()->route('jumlempolitik');
    }
}
