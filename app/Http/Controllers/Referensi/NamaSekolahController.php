<?php

namespace App\Http\Controllers\Referensi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Referensi\NamaSekolah;

class NamaSekolahController extends Controller
{
    public function index()
    {
    	$data = NamaSekolah::all();
    	return view('referensi.nama_sekolah.index',compact('data'));
    }
    public function create()
    {
    	$JenisPendidikan = NamaSekolah::all();
    	return view('referensi.nama_sekolah.create',compact('JenisPendidikan'));
    } 
    	public function store(Request $request){
		$data = new NamaSekolah();
		$data->id_jenis_pendidikan = $request->id_jenis_pendidikan;
		$data->nama_sekolah = $request->nama_sekolah;
		$data->save();
		return redirect()->route('nama_sekolah');
	}

	public function edit($id)
	{
		$data = NamaSekolah::findorfail($id);
		$JenisPendidikan = NamaSekolah::all();
		
		
		return view('referensi.nama_sekolah.edit',compact('data','JenisPendidikan'));
	}
	public function update(Request $request, $id){
		$data = NamaSekolah::findorfail($id);
		$data->id_jenis_pendidikan = $request->id_jenis_pendidikan;
		$data->nama_sekolah = $request->nama_sekolah;
		$data->save();
		return redirect()->route('nama_sekolah');
	}
	public function destroy($id)
    {
    	$data = NamaSekolah::find($id);
 		$data->delete();
 		return redirect()->route('nama_sekolah');
    }
}


