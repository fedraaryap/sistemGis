<?php

namespace App\Http\Controllers\PotensiDesa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Potensi\LembagaEkonomiDesa;
use App\Model\DataInduk\JumlahOrang;
use App\Model\DataInduk\JumlahAngkutan;
use App\Model\DataInduk\StatusJasaUsaha;

class LembagaEkonomiController extends Controller
{
    public function index()
    {
    	$data = LembagaEkonomiDesa::all();
    	return view('Potensi.LembagaEkonomi.index',compact('data'));
    }
    public function create()
    {
    	$JumlahOrang = JumlahOrang::all();
    	$JumlahAngkutan = 	JumlahAngkutan::all();
    	$StatusJasaUsaha = StatusJasaUsaha::all();
    	return view('potensi.LembagaEkonomi.create',compact('JumlahOrang','JumlahAngkutan','StatusJasaUsaha'));
    }

    public function store(Request $request)
    {
         $data = new LembagaEkonomiDesa();
         $data->id_jumlah_orang = $request->id_jumlah_orang;
         $data->id_stat_jasa_usaha = $request->id_stat_jasa_usaha;
         $data->id_pengangkutan = $request->id_pengangkutan;
         $data->save();
         return redirect()->route('ekonomi');
	}
	  public function destroy($id)
    {
        $data = LembagaEkonomiDesa::find($id);
        $data->delete();
        return redirect()->route('ekonomi');
    }
}
