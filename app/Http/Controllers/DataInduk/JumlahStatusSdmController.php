<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\JumlahStatusSdm;

class JumlahStatusSdmController extends Controller
{
   public function index()
    {
        $data = JumlahStatusSdm::all();
        return view('DataInduk.JumlahStatusSdm.index',compact('data'));
    }


    public function create()
    {
        $JumlahStatus = JumlahStatusSdm::all();
        return view('DataInduk.JumlahStatusSdm.create',compact('JumlahStatus'));
    }

  
    public function store(Request $request)
    {
        $data = new JumlahStatusSdm;
        $data->id_status = $request->id_status;
        $data->jumlah_sdm = $request->jumlah_sdm;
       
        $data->save();
        return redirect()->route('jumstatsdm');
    }

 
    public function edit($id)
    {
         $data = JumlahStatusSdm::findorfail($id);
         $JumlahStatus =JumlahStatusSdm::all();
        return view('DataInduk.JumlahStatusSdm.edit',compact('data','JumlahStatus'));
    }


    public function update(Request $request, $id)
    {
        $data = JumlahStatusSdm::findorfail($id);
        $data->id_status = $request->id_status;
        $data->jumlah_sdm = $request->jumlah_sdm;
       
        $data->save();
        return redirect()->route('jumstatsdm');
    }

 
    public function destroy($id)
    {
        $data = JumlahStatusSdm::find($id);
        $data->delete();
        return redirect()->route('jumstatsdm');
    }
}
