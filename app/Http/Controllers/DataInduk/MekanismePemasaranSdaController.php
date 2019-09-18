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
        $data->id_desa =$request->id_desa;
        $data->jenis_pemasaran_sda = $request->jenis_pemasaran_sda;
        $data->katagori_pemasaran = $request->katagori_pemasaran;
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
        $data->id_desa =$request->id_desa;
        $data->jenis_pemasaran_sda = $request->jenis_pemasaran_sda;
        $data->katagori_pemasaran = $request->katagori_pemasaran;
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
