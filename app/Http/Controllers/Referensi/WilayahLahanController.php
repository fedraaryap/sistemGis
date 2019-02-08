<?php

namespace App\Http\Controllers\Referensi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Referensi\WilayahLahan;


class WilayahLahanController extends Controller
{
    public function index()
    {
    	$data = WilayahLahan::all();
    	return view('referensi.wilayah_lahan.index',compact('data'));
    }

    public function create()
    {
    	$wilayah = WilayahLahan::all();
    	return view('referensi.wilayah_lahan.create',compact('wilayah'));
    }
    
    public function store(Request $request)
    {
    	$data = new WilayahLahan();
		$data->wil_id_wilayah_lahan = $request->wil_id_wilayah_lahan;
		$data->jenis_wilayah = $request->jenis_wilayah;
		$data->save();
		return redirect()->route('wilayah_lahan');
	}

	public function edit($id)
	{
    	$wilayah = WilayahLahan::all();
		$data = WilayahLahan::findOrFail($id);
		return view('referensi.wilayah_lahan.edit',compact('data','wilayah'));
	}

	public function update(Request $request, $id)
	{
		$data = WilayahLahan::findorfail($id);
		$data->wil_id_wilayah_lahan = $request->wil_id_wilayah_lahan;
		$data->jenis_wilayah = $request->jenis_wilayah;
		$data->save();
		return redirect()->route('wilayah_lahan');
	}

	public function destroy($id)
    {
    	$data = WilayahLahan::find($id);
 		$data->delete();
 		return redirect()->route('wilayah_lahan');
    }
}
