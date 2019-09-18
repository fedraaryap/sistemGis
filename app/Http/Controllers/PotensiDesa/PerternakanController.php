<?php

namespace App\Http\Controllers\PotensiDesa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Potensi\PotensiPerternakan;
use App\Model\DataInduk\MekanismePemasaranSda;
use App\Model\DataInduk\JumlahBudidayaIkan;
use App\Model\DataInduk\PopulasiTernak;
use App\Model\DataInduk\PakanTernak;
use App\Model\DataInduk\JumlahProduksi;


class PerternakanController extends Controller
{
    public function index()
    {
    	$data = PotensiPerternakan::all();
    	return view('Potensi.Peternakan.index',compact('data'));
    }

    public function create()
    {
    	$MekanismePemasaranSda = MekanismePemasaranSda::all();
    	$JumlahBudidayaIkan = JumlahBudidayaIkan::all();
    	$PopulasiTernak = PopulasiTernak::all();
    	$PakanTernak = PakanTernak::all();
    	$JumlahProduksi = JumlahProduksi::all();
    	return view('Potensi.Peternakan.create',compact('MekanismePemasaranSda','JumlahBudidayaIkan','PopulasiTernak','PakanTernak','JumlahProduksi'));
    }

    public function store(Request $request)
    {
    	$data = new PotensiPerternakan();
    	$data->id_pemasaran_sda = $request->id_pemasaran_sda;
    	$data->id_jumlah_budidaya = $request->id_jumlah_budidaya;
    	$data->id_populasi = $request->id_populasi;
    	$data->id_pakan_ternak = $request->id_pakan_ternak;
    	$data->id_jumlah_produksi = $request->id_jumlah_produksi;
    	$data->save();
    	return redirect()->route('perternakan');
    }

    	  public function destroy($id)
    {
        $data = PotensiPerternakan::find($id);
        $data->delete();
        return redirect()->route('perternakan');
    }
}
