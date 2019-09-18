<?php

namespace App\Http\Controllers\PotensiDesa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Potensi\PotensiSdm;
use App\Model\DataInduk\TenagaKerja;
use App\Model\DataInduk\JumlahSdmDesa;
use App\Model\DataInduk\JumlahSdmPendidikan;
use App\Model\DataInduk\JumlahStatusSdm;
use App\Model\DataInduk\JumlahUsiaSdm;
use App\Model\DataInduk\KualitasAngkatan;

class SdmController extends Controller
{
    public function index()
    {
    	$data = PotensiSdm::all();
    	return view('Potensi.sdm.index',compact('data'));
    }

          public function create()
    {
    	$TenagaKerja = TenagaKerja::all();
    	$JumlahSdmDesa = JumlahSdmDesa::all();
    	$JumlahSdmPendidikan = JumlahSdmPendidikan::all();
    	$JumlahStatusSdm = JumlahStatusSdm::all();
    	$JumlahUsiaSdm = JumlahUsiaSdm::all();
    	$KualitasAngkatan = KualitasAngkatan::all();
 
    	return view('Potensi.sdm.create',compact('TenagaKerja','JumlahSdmDesa','JumlahSdmPendidikan','JumlahStatusSdm','JumlahUsiaSdm','KualitasAngkatan'));
    }

    public function store(Request $request)
    {
    	$data = new  PotensiSdm();
    	$data->id_tenaga_kerja = $request->id_tenaga_kerja;
    	$data->id_jumlah_sdm = $request->id_jumlah_sdm;
    	$data->id_sdm_pendidikan = $request->id_sdm_pendidikan;
    	$data->id_jumlah_status = $request->id_jumlah_status;
    	$data->id_usia_sdm = $request->id_usia_sdm;
    	$data->id_angkatan = $request->id_angkatan;
    	$data->save();
    	return redirect()->route('sdm');
    }

    	  public function destroy($id)
    {
        $data = PotensiSdm::find($id);
        $data->delete();
        return redirect()->route('sdm');
    }
}
