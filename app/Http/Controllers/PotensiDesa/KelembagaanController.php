<?php

namespace App\Http\Controllers\PotensiDesa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Potensi\PotensiKeLembagaan;
use App\Model\DataInduk\LembagaPendidikan;
use App\Model\DataInduk\LembagaKeamanan;
use App\Model\DataInduk\JumlahLembagaPolitik;
use App\Model\DataInduk\Wilayah;
use App\Model\DataInduk\PerangkatDesa;
use DB;

class KelembagaanController extends Controller
{
    public function index($id)
    {
        $kabupaten = Wilayah::where("id_lv_wil",2)->pluck("nama_wil","id_wilayah");
    	$data = PotensiKelembagaan::all();
    	return view('potensi.Kelembagaan.index',compact('data','kabupaten'));
    }
      public function drill_down(Request $request) {
        $kecamatan = Wilayah::where("wil_id_wilayah",$request->id_wil)->pluck("nama_wil","id_wilayah");
        $kelembagaan = DB::table('data_desa.profil_desa')->join('data_induk.perangkat_desa','profil_desa.id_perangkat_desa','=','perangkat_desa.id_perangkat_desa')->where('id_wilayah',$request->id_wil)->get();
        return json_encode([$kecamatan,$kelembagaan]);

    }

     public function desa(Request $request) {
        $kelembagaan = DB::table('data_desa.profil_desa')->join('data_induk.perangkat_desa','profil_desa.id_perangkat_desa','=','perangkat_desa.id_perangkat_desa')->where('id_wilayah',$request->id_wil)->get();
        return json_encode($kelembagaan);

    }


    public function create()
    {
    	$Lempendidikan = LembagaPendidikan::all();
    	$keamanan = 	LembagaKeamanan::all();
    	$JumlahLembaga = JumlahLembagaPolitik::all();
    	return view('potensi.Kelembagaan.create',compact('Lempendidikan','keamanan','JumlahLembaga'));
    }

    public function store(Request $request)
    {
         $data = new PotensiKelembagaan();
         $data->id_pendidikan = $request->id_pendidikan;
         $data->id_keamanan = $request->id_keamanan;
         $data->id_jumlah_lembaga = $request->id_jumlah_lembaga;
         $data->save();
         return redirect()->route('kelembagaan');
	}

	public function destroy($id)
    {
        $data = PotensiKelembagaan::find($id);
        $data->delete();
        return redirect()->route('kelembagaan');
    }

}
