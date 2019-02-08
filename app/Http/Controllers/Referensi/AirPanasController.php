<?php

namespace App\Http\Controllers\Referensi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\referensi\AirPanas;

class AirPanasController extends Controller
{
    public function index()
    {
    	$data = AirPanas::all();
    	return view('referensi.airpanas.index',compact('data'));
    }
    public function create()
    {
    	return view('referensi.airpanas.create');
    }
    	public function store(Request $request){
		$data = new AirPanas();
		$data->sumber_air_panas = $request->sumber_air_panas;
		$data->save();
		return redirect()->route('air_panas');
	}

	public function edit($id)
	{
		$data = AirPanas::findorfail($id);
		return view('referensi.airpanas.edit',compact('data'));
	}
	public function update(Request $request, $id){
		$data = AirPanas::findorfail($id);
		$data->sumber_air_panas = $request->sumber_air_panas;
		$data->save();
		return redirect()->route('air_panas');
	}
	public function destroy($id)
    {
    	$data = AirPanas::find($id);
 		$data->delete();
 		return redirect()->route('air_panas');
    }
}


