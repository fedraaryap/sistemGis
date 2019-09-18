<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\JumlahUsiaSdm;

class JumlahUsiaSdmController extends Controller
{
    public function index()
    {
        $data = JumlahUsiaSdm::all();
        return view('DataInduk.JumlahUsiaSdm.index',compact('data'));
    }


    public function create()
    {
        $RangeUsia = JumlahUsiaSdm::all();
        $Jeniskelamin =JumlahUsiaSdm::all();
        return view('DataInduk.JumlahUsiaSdm.create',compact('RangeUsia','Jeniskelamin'));
    }

  
    public function store(Request $request)
    {
        $data = new JumlahUsiaSdm;
        $data->id_desa =$request->id_desa;
        $data->id_range = $request->id_range;
        $data->jk_usia = $request->jk_usia;
        $data->jumlah_sdm_usia = $request->jumlah_sdm_usia;
        $data->save();
        return redirect()->route('jumusiasdm');
    }

 
    public function edit($id)
    {
         $data = JumlahUsiaSdm::findorfail($id);
         $RangeUsia =JumlahUsiaSdm::all();
         $Jeniskelamin =JumlahUsiaSdm::all();
        return view('DataInduk.JumlahUsiaSdm.edit',compact('data','RangeUsia','Jeniskelamin'));
    }


    public function update(Request $request, $id)
    {
        $data = JumlahUsiaSdm::findorfail($id);
        $data->id_desa =$request->id_desa;
        $data->id_range = $request->id_range;
        $data->jk_usia = $request->jk_usia;
        $data->jumlah_sdm_usia = $request->jumlah_sdm_usia;
        $data->save();
        return redirect()->route('jumusiasdm');
    }

 
    public function destroy($id)
    {
        $data = JumlahUsiaSdm::find($id);
        $data->delete();
        return redirect()->route('jumusiasdm');
    }
}
