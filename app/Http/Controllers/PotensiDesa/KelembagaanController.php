<?php

namespace App\Http\Controllers\PotensiDesa\kelembagaan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Potensi\PotensiKeLembagaan;

class KelembagaanController extends Controller
{
    public function index()
    {
    	$data = PotensiKelembagaan::all();
    	return view('potensi.Kelembagaan.index',compact('data'));
    }


    public function create()
    {
    	
    	$data = PotensiKelembagaan::all();
    	return view('potensi.Kelembagaan.create',compact('data'));
    }
    
    public function store(Request $request)
    {
    	$data = new PotensiKelembagaan();
		$data->jumlah_sekolah = $request->jumlah_sekolah;
		$data->jumlah_pengajar = $request->jumlah_pengajar;
		$data->jumlah_siswa = $request->jumlah_siswa;
		$data->kepemilikan = $request->kepemilikan;
		$data->save();
		return redirect()->route('lem');
	}

	public function edit($id)
	{
    	$wilayah = PotensiKelembagaan::all();
		$data =PotensiKelembagaan::findOrFail($id);
		return view('potensi.Kelembagaan.edit',compact('data','pendidikan'));
	}

	public function update(Request $request, $id)
	{
		$data = PotensiKelembagaan::findorfail($id);
	$data->jumlah_sekolah = $request->jumlah_sekolah;
		$data->jumlah_pengajar = $request->jumlah_pengajar;
		$data->jumlah_siswa = $request->jumlah_siswa;
		$data->kepemilikan = $request->kepemilikan;
		$data->save();
		return redirect()->route('Kelembagaan');
	}

	public function destroy($id)
    {
    	$data = PotensiKelembagaan::find($id);
 		$data->delete();
 		return redirect()->route('Kelembagaan');
    }
}
