<?php

namespace App\Http\Controllers\PotensiDesa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Potensi\PotensiSarpras;
use App\Model\DataInduk\StatusSarprasPemerintahan;

class SarprasDesaController extends Controller
{
    public function index()
    {
    	$data = PotensiSarpras::all();
    	return view('Potensi.SarprasDesa.index',compact('data'));
    }

       public function create()
    {
    	$StatSarprasPemerintahan = StatusSarprasPemerintahan::all();
    	return view('Potensi.SarprasDesa.create',compact('StatSarprasPemerintahan'));
    }

    public function store(Request $request)
    {
    	$data = new PotensiSarpras();
    	$data->id_status_sarpras = $request->id_status_sarpras;
    	$data->save();
    	return redirect()->route('sarprasdesa');
    }

    	  public function destroy($id)
    {
        $data = PotensiSarpras::find($id);
        $data->delete();
        return redirect()->route('sarprasdesa');
}

}
