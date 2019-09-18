<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\Hutan;
use App\Model\Referensi\KondisiHutan;
use App\Model\Referensi\DampakPengolahanHutan;

class Hutancontroller extends Controller
{

    public function index()
    {
        $data = Hutan::get();
        return view('DataInduk.Hutan.index',compact('data'));
    }

    public function create()
    {
       
        $kondisiHutan = KondisiHutan::all();
        $DampakHutan = DampakPengolahanHutan::all();
      
        return view('DataInduk.Hutan.create',compact('kondisiHutan','DampakHutan'));
    }


    public function store(Request $request)
    {
        $data = new Hutan();
        $data->id_desa =$request->id_desa;
        $data->id_dampak = $request->id_dampak;
        $data->id_kondisi = $request->id_kondisi;
        $data->status = $request->status;
        $data->a_kondisi = $request->a_kondisi;
        $data->a_dampak_pengolahan = $request->a_dampak_pengolahan;
        $data->save();
        return redirect()->route('hutan');
    }
 
    public function edit($id)
    {
        $data = Hutan::findorfail($id);
        $a_kondisi = Hutan::all();
        $a_dampak = Hutan::all();
        $kondisiHutan = Hutan::all();
        $DampakHutan = Hutan::all();
        $Kondisi = Hutan::all();
        $Dampak = Hutan::all();
        $Status = Hutan::all();
        return view('DataInduk.Hutan.edit',compact('data','a_kondisi','a_dampak','kondisiHutan','DampakHutan','Kondisi','Dampak','Status'));
    }
    

    public function update(Request $request, $id)
    {
        $data = Hutan::findorfail($id);
        $data->id_desa =$request->id_desa;
        $data->id_dampak = $request->id_dampak;
        $data->id_kondisi = $request->id_kondisi;
        $data->status = $request->status;
        $data->a_kondisi = $request->a_kondisi;
        $data->a_dampak_pengolahan = $request->a_dampak_pengolahan;
        $data->save();
        return redirect()->route('hutan');
    }


    public function destroy($id)
    {
        $data = Hutan::find($id);
        $data->delete();
        return redirect()->route('hutan');
    }
}
