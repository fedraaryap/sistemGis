<?php

namespace App\Http\Controllers\PotensiDesa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Potensi\PotensiSda;
use App\Model\DataInduk\StatusSumberAir;
use App\Model\DataInduk\PotensiAir;
use App\Model\DataInduk\StatusAir;
use App\Model\DataInduk\BahanGalian;

class SdaController extends Controller
{
    public function index()
    {
    	$data = PotensiSda::all();
    	return view('Potensi.sda.index',compact('data'));
    }
        public function create()
    {
    	$StatSumberAir = StatusSumberAir::all();
    	$PotensiAir = PotensiAir::all();
    	$StatusAir = StatusAir::all();
    	$BahanGalian = BahanGalian::all();
 
    	return view('Potensi.sda.create',compact('StatSumberAir','PotensiAir','StatusAir','BahanGalian'));
    }

    public function store(Request $request)
    {
    	$data = new PotensiSda();
    	$data->id_status_sumber = $request->id_status_sumber;
    	$data->id_potensi_air = $request->id_potensi_air;
    	$data->id_status_air = $request->id_status_air;
    	$data->id_galian = $request->id_galian;
    	$data->save();
    	return redirect()->route('sda');
    }

    	  public function destroy($id)
    {
        $data = PotensiSda::find($id);
        $data->delete();
        return redirect()->route('sda');
    }
}
