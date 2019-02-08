<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\PotensiAir;

class PotensiAirController extends Controller
{
    public function index()
    {
        $data = PotensiAir::all();
        return view('DataInduk.PotensiAir.index',compact('data'));
    }

    public function create()
    {
      
        $Status = PotensiAir::all();      
        return view('DataInduk.PotensiAir.create',compact('Status'));
    }

  
    public function store(Request $request)
    {
        $data = new PotensiAir;
        $data->jenis_potensi_air = $request->jenis_potensi_air;
        $data->status_potensi_air = $request->status_potensi_air;
        $data->save();
        return redirect()->route('potensiair');
    }

 
    public function edit($id)
    {
         $data = PotensiAir::findorfail($id);
         $Status = PotensiAir::all(); 
        return view('DataInduk.PotensiAir.edit',compact('data','Status'));
    }


    public function update(Request $request, $id)
    {
        $data = PotensiAir::findorfail($id);
        $data->jenis_potensi_air = $request->jenis_potensi_air;
        $data->status_potensi_air = $request->status_potensi_air;
        $data->save();
        return redirect()->route('potensiair');
    }

 
    public function destroy($id)
    {
        $data = PotensiAir::find($id);
        $data->delete();
        return redirect()->route('potensiair');
    }
}
