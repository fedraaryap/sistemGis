<?php

namespace App\Http\Controllers\PotensiDesa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Potensi\PrasaranaSarana;
use App\Model\DataInduk\StatusPrasarana;
use App\Model\DataInduk\StatPrasaranaLainnya;
use App\Model\DataInduk\StatusSaranaTransportasi;


class SarprasPemerintahanController extends Controller
{
    public function index()
    {
    	$data = PrasaranaSarana::get();
    	return view('Potensi.SarprasPemerintahan.index',compact('data'));
    }


    public function create()
    {
    	$StatusPrasarana = StatusPrasarana::all();
    	$StatPrasaranaLainnya = StatPrasaranaLainnya::all();
    	$StatusSatanaTransportasi = StatusSaranaTransportasi::all();
 
    	return view('Potensi.SarprasPemerintahan.create',compact('StatusPrasarana','StatPrasaranaLainnya','StatusSatanaTransportasi'));
    }

    public function store(Request $request)
    {
    	$data = new PrasaranaSarana();
    	$data->id_status_prasarana = $request->id_status_prasarana;
    	$data->id_stat_prasarana = $request->id_stat_prasarana;
    	$data->id_status_transportasi = $request->id_status_transportasi;
    	$data->save();
    	return redirect()->route('sarpraspemerintah');
    }

    	  public function destroy($id)
    {
        $data = PrasaranaSarana::find($id);
        $data->delete();
        return redirect()->route('sarpraspemerintah');
    }
}
