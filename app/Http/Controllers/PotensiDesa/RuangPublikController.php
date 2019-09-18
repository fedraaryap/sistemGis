<?php

namespace App\Http\Controllers\PotensiDesa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Potensi\RuangPublik;
use App\Model\DataInduk\KualitasUdara;
use App\Model\DataInduk\Kebisingan;
use App\Model\DataInduk\StatusLahan;

 
class RuangPublikController extends Controller
{
    public function index()
    {
    	$data = RuangPublik::get();
    	return view('Potensi.RuangPublik.index',compact('data'));
    }

    public function create()
    {
    	$KualitasUdara = KualitasUdara::all();
    	$Kebisingan = Kebisingan::all();
    	$StatusLahan = StatusLahan::all();
 
    	return view('Potensi.RuangPublik.create',compact('KualitasUdara','Kebisingan','StatusLahan'));
    }

    public function store(Request $request)
    {
    	$data = new RuangPublik();
    	$data->id_kualitas = $request->id_kualitas;
    	$data->id_kebisingan = $request->id_kebisingan;
    	$data->id_status_lahan = $request->id_status_lahan;
    	$data->save();
    	return redirect()->route('ruangpublik');
    }

    	  public function destroy($id)
    {
        $data = RuangPublik::find($id);
        $data->delete();
        return redirect()->route('ruangpublik');
    }
}
