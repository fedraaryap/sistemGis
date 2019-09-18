<?php

namespace App\Http\Controllers\DaftarDesa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DaftarDesa\ProfilDesa;
use App\Model\DataInduk\Wilayah;
use App\Model\DataInduk\PerangkatDesa;

class DesaController extends Controller
{

    public function index()
    {
    	$data = ProfilDesa::get();
    	return view('DaftarDesa.index',compact('data')); 
   
    }

    public function create()
    {
    	$Wilayah = Wilayah::all();
    	$PerangkatDesa = PerangkatDesa::all();
    	return view('DaftarDesa.create',compact('Wilayah','PerangkatDesa'));
    }

    public function store(Request $request)
    {
    	$data = new ProfilDesa();
    	$data->id_wilayah = $request->id_wilayah;
    	$data->id_perangkat_desa = $request->id_perangkat_desa;
    	$data->save();
    	return redirect()->route('desa');


    }

}

