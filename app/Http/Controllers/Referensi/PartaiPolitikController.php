<?php

namespace App\Http\Controllers\Referensi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Referensi\PartaiPolitik;

class PartaiPolitikController extends Controller
{
    public function index()
    {
    	$data = PartaiPolitik::all();
    	return view('referensi.partai_politik.index',compact('data'));
    }
    public function create()
    {
    	return view('referensi.partai_politik.create');
    }
    	public function store(Request $request){
		$data = new PartaiPolitik();
		$data->nama_partai = $request->nama_partai;
		$data->alamat_sekret = $request->alamat_sekret;
		$data->jenis_kegiatan = $request->jenis_kegiatan;
		$data->dasar_hukum_pembentukan = $request->dasar_hukum_pembentukan;
		$data->organisasi_underbow = $request->organisasi_underbow;
		$data->save();
		return redirect()->route('partai_politik');
	}

	public function edit($id)
	{
		$data = PartaiPolitik::findorfail($id);
		return view('referensi.partai_politik.edit',compact('data'));
	}
	public function update(Request $request, $id){
		$data = PartaiPolitik::findorfail($id);
		$data->nama_partai = $request->nama_partai;
		$data->alamat_sekret = $request->alamat_sekret;
		$data->jenis_kegiatan = $request->jenis_kegiatan;
		$data->dasar_hukum_pembentukan = $request->dasar_hukum_pembentukan;
		$data->organisasi_underbow = $request->organisasi_underbow;
		$data->save();
		return redirect()->route('partai_politik');
	}
	public function destroy($id)
    {
    	$data = PartaiPolitik::find($id);
 		$data->delete();
 		return redirect()->route('partai_politik');
    }
}


