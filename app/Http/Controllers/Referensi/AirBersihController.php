<?php

namespace App\Http\Controllers\Referensi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\referensi\AirBersih;

class AirBersihController extends Controller
{
    public function index()
    {
    	$data = AirBersih::all();
    	return view('referensi.airbersih.index',compact('data'));
    }
    public function create()
    {
    	$kondisiair = Airbersih::all();
    	return view('referensi.airbersih.create',compact('kondisiair'));
    }
    	public function store(Request $request){
		$data = new AirBersih();
		$data->jenis_air_bersih = $request->jenis_air_bersih;
		$data->kondisi_air = $request->kondisi_air;
		$data->kualitas_air = $request->kualitas_air;
		$data->save();
		return redirect()->route('air_bersih');
	}

	public function edit($id)
	{
		$data = AirBersih::findorfail($id);
		return view('referensi.airbersih.edit',compact('data'));
	}
	public function update(Request $request, $id){
		$data = AirBersih::findorfail($id);
		$data->jenis_air_bersih = $request->jenis_air_bersih;
		$data->kondisi_air = $request->kondisi_air;
		$data->kualitas_air = $request->kualitas_air;	
		$data->save();
		return redirect()->route('air_bersih');
	}
	public function destroy($id)
    {
    	$data = AirBersih::find($id);
 		$data->delete();
 		return redirect()->route('air_bersih');
    }
}


