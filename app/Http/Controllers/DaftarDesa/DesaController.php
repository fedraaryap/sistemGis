<?php

namespace App\Http\Controllers\DaftarDesa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DaftarDesa\ProfilDesa;

class DesaController extends Controller
{

    public function index()
    {
    	$data = ProfilDesa::all();
    	return view('DaftarDesa.index',compact('data'));
    }
    public function create()
    {

    	return view('DaftarDesa.create',compact('data'));
    }
    	public function store(Request $request){
		$data = new ProfilDesa();	
		$data->nama_wil=$request->nama_wil;
		$data->kepala_desa=$request->kepala_desa;
    	$data->tahun_mulai=$request->tahun_mulai;
    	$data->tahun_akhir=$request->tahun_akhir;
    	$data->latitude=$Request->latitude;
    	$data->longitude=$request->longitude;
    	$data->save();
		return redirect()->route('daftardesa');
	}

	public function edit($id)
	{
		$data = ProfilDesa::findorfail($id);
		return view('DaftarDesa.edit',compact('data'));
	}
	public function update(Request $request, $id){
		$data = ProfilDesa::findorfail($id);
	    $data->nama_wil=$request->nama_wil;
        $data->kepala_desa=$request->kepala_desa;
        $data->tahun_mulai=$request->tahun_mulai;
        $data->tahun_akhir=$request->tahun_akhir;
        $data->latitude=$Request->latitude;
        $data->longitude=$request->longitude;
        $data->save();
		return redirect()->route('daftardesa');
	}
	public function destroy($id)
    {
    	$data = ProfilDesa::find($id);
 		$data->delete();
 		return redirect()->route('daftardesa');
    }
}

