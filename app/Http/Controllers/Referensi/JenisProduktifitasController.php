<?php

namespace App\Http\Controllers\Referensi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\referensi\JenisProduktifitas;

class JenisProduktifitasController extends Controller
{
    public function index()
    {
    	$data = JenisProduktifitas::all();
    	return view('referensi.jenis_produktifitas.index',compact('data'));
    }
    public function create()
    {
    	$Pemasaran = JenisProduktifitas::all();
    	return view('referensi.jenis_produktifitas.create',compact('Pemasaran'));
    }
    	public function store(Request $request){
		$data = new JenisProduktifitas();
		$data->jenis_produktifitas = $request->jenis_produktifitas;
		$data->save();
		return redirect()->route('jenis_produktifitas');
	}

	public function edit($id)
	{
		$data = JenisProduktifitas::findorfail($id);
		$Pemasaran = JenisProduktifitas::all();
		return view('referensi.jenis_produktifitas.edit',compact('data','Pemasaran'));
	}
	public function update(Request $request, $id){
		$data = JenisProduktifitas::findorfail($id);
		$data->jenis_produktifitas = $request->jenis_produktifitas;	
		$data->save();
		return redirect()->route('jenis_produktifitas');
	}
	public function destroy($id)
    {
    	$data = JenisProduktifitas::find($id);
 		$data->delete();
 		return redirect()->route('jenis_produktifitas');
    }
}


