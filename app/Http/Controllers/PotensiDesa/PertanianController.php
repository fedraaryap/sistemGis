<?php

namespace App\Http\Controllers\PotensiDesa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Potensi\PotensiPertanian;
use App\Model\DataInduk\LuasLahan;
use App\Model\DataInduk\JumlahPemilikLahan;
use App\Model\DataInduk\ProduktifitasPertanian;
use App\Model\DataInduk\Hutan;

class PertanianController extends Controller
{
    public function index()

    {
    	$data = PotensiPertanian::get();
    	return view('Potensi.Pertanian.index',compact('data'));
    }

        public function create()
    { 
    	$LuasLahan = LuasLahan::all();
    	$JumlahPemilikLahan = 	JumlahPemilikLahan::all();
    	$ProduktifitasPertanian = ProduktifitasPertanian::all();
        $Hutan = Hutan::all();
    	return view('potensi.Pertanian.create',compact('LuasLahan','JumlahPemilikLahan','ProduktifitasPertanian','Hutan'));
    }
    	public function store(Request $request)
    {
    	$data = new PotensiPertanian();
    	$data->id_luas_lahan = $request->id_luas_lahan;
    	$data->id_pemilik = $request->id_pemilik;
    	$data->id_produktifitas = $request->id_produktifitas;
        $data->id_hutan = $request->id_hutan;
    	$data->save();
    	return redirect()->route('pertanian');
    }
    	  public function destroy($id)
    {
        $data = PotensiPertanian::find($id);
        $data->delete();
        return redirect()->route('pertanian');

    }
}
