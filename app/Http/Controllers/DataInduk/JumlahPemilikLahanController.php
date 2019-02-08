<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\JumlahPemilikLahan;

class JumlahPemilikLahanController extends Controller
{
    public function index()
    {
        $data = JumlahPemilikLahan::all();
        return view('DataInduk.JumlahPemilikLahan.index',compact('data'));
    }


    public function create()
    {
        $RangeLahan = JumlahPemilikLahan::all();
        return view('DataInduk.JumlahPemilikLahan.create',compact('RangeLahan'));
    }

  
    public function store(Request $request)
    {
        $data = new JumlahOrang;
        $data->id_range_lahan = $request->id_range_lahan;
        $data->jenis_lahan = $request->jenis_lahan;
        $data->jumlah_pemilik = $request->jumlah_pemilik;
        $data->save();
        return redirect()->route('jumpemlahan');
    }

 
    public function edit($id)
    {
         $data = JumlahPemilikLahan::findorfail($id);
         $RangeLahan =JumlahPemilikLahan::all();
        return view('DataInduk.JumlahPemilikLahan.edit',compact('data','RangeLahan'));
    }


    public function update(Request $request, $id)
    {
        $data = JumlahPemilikLahan::findorfail($id);
        $data->id_range_lahan = $request->id_range_lahan;
        $data->jenis_lahan = $request->jenis_lahan;
        $data->jumlah_pemilik = $request->jumlah_pemilik;
        $data->save();
        return redirect()->route('jumpemlahan');
    }

 
    public function destroy($id)
    {
        $data = JumlahPemilikLahan::find($id);
        $data->delete();
        return redirect()->route('jumpemlahan');
    }
}
