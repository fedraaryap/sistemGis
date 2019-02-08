<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\MekanismePemasaranSda;

class MekanismePemasaranSdaController extends Controller
{
    public function index()
    {
        $data = MekanismePemasaranSda::all();
        return view('DataInduk.mekanismepemasaransda.index',compact('data'));
    }


    public function create()
    {
        $Status = MekanismePemasaranSda::all();
        return view('DataInduk.mekanismepemasaransda.create',compact('Status'));
    }

  
    public function store(Request $request)
    {
        $data = new MekanismePemasaranSda;  
        $data->jenis_pemasaran_sda = $request->jenis_pemasaran_sda;
        $data->kategori_pemasaran = $request->kategori_pemasaran;
        $data->status_pemasaran = $request->status_pemasaran;

        $data->save();
        return redirect()->route('mekpemsda');
    }

 
    public function edit($id)
    {
        $data = MekanismePemasaranSda::findorfail($id);
        $Status = MekanismePemasaranSda::all();
        return view('DataInduk.mekanismepemasaransda.edit',compact('data','Status'));
    }


    public function update(Request $request, $id)
    {
        $data = MekanismePemasaranSda::findorfail($id);
        $data->jenis_pemasaran_sda = $request->jenis_pemasaran_sda;
        $data->kategori_pemasaran = $request->kategori_pemasaran;
        $data->status_pemasaran = $request->status_pemasaran;
        $data->save();
        return redirect()->route('mekpemsda');
    }

 
    public function destroy($id)
    {
        $data = MekanismePemasaranSda::find($id);
        $data->delete();
        return redirect()->route('mekpemsda');
    }
}
