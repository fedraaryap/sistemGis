<?php

namespace App\Http\Controllers\PotensiDesa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Potensi\PotensiUmum;
use App\Model\DataInduk\StatusOrbitasi;
use App\Model\DataInduk\LuasWilayah;
use App\Model\DataInduk\BatasWilayah;


class UmumController extends Controller
{
    public function index()
    {
    	$data = PotensiUmum::all();
    	return view('Potensi.umum.index',compact('data'));
    }
      public function create()
    {
    	$StatusOrbitasi = StatusOrbitasi::all();
    	$LuasWilayah = 	LuasWilayah::all();
    	$BatasWilayah = BatasWilayah::all();
    	return view('potensi.umum.create',compact('StatusOrbitasi','LuasWilayah','BatasWilayah'));
    }

    public function store(Request $request)
    {
    $data = new PotensiUmum();
    $data->id_status_orbitasi = $request->id_status_orbitasi;
    $data->id_luas_wilayah = $request->id_luas_wilayah;
    $data->id_batas_wilayah = $request->id_batas_wilayah;
    $data->save();
    return redirect()->route('umum');
	}
	  public function destroy($id)
    {
        $data = PotensiUmum::find($id);
        $data->delete();
        return redirect()->route('umum');
    }
}
