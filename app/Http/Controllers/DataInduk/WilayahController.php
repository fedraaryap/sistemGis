<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\Wilayah;

class WilayahController extends Controller
{
    
     public function index()
    {
        $data = Wilayah::all();
        return view('DataInduk.Wilayah.index',compact('data'));
    }

    public function create()
    {
      
        $LvWil = Wilayah::all();
        return view('DataInduk.Wilayah.create',compact('Taman','LvWil'));
    }
    
    public function store(Request $request)
    {
        $data = new Wilayah();
        $data->id_lv_wil = $request->id_lv_wil;
        $data->id_induk = $request->id_induk;
        $data->latitude = $request->latitude;
        $data->longitude = $request->longitude;
        $data->nama_wil = $request->nama_wil;
        $data->save();
        return redirect()->route('wilayah');
    }

    public function edit($id)
    {
        $data = Wilayah::findorfail($id);
        $LvWil = Wilayah::all();
        return view('DataInduk.Wilayah.edit',compact('data','LvWil'));
    }

    public function update(Request $request, $id)
    {
        $data = Wilayah::findorfail($id);
        $data->id_lv_wil = $request->id_lv_wil;
        $data->id_induk = $request->id_induk;
        $data->latitude = $request->latitude;
        $data->longitude = $request->longitude;
        $data->nama_wil = $request->nama_wil;
        $data->save();
        return redirect()->route('wilayah');
    }

    public function destroy($id)
    {
        $data = Wilayah::find($id);
        $data->delete();
        return redirect()->route('wilayah');
    }
}
