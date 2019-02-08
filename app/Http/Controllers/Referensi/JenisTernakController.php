<?php

namespace App\Http\Controllers\Referensi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\referensi\JenisTernak;

class JenisTernakController extends Controller
{
    public function index()
    {
    	$data = JenisTernak::all();
    	return view('referensi.jenis_ternak.index',compact('data'));
    }
    public function create()
    {
    	return view('referensi.jenis_ternak.create');
    }
    	public function store(Request $request){
		$data = new JenisTernak();
		$data->jenis_ternak = $request->jenis_ternak;
		$data->save();
		return redirect()->route('jenis_ternak');
	}

	public function edit($id)
	{
		$data = JenisTernak::findorfail($id);
		return view('referensi.jenis_ternak.edit',compact('data'));
	}
	public function update(Request $request, $id){
		$data = JenisTernak::findorfail($id);
		$data->jenis_ternak = $request->jenis_ternak;
		$data->save();
		return redirect()->route('jenis_ternak');
	}
	public function destroy($id)
    {
    	$data = JenisTernak::find($id);
 		$data->delete();
 		return redirect()->route('jenis_ternak');
    }
}


