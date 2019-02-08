<?php

namespace App\Http\Controllers\Referensi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Referensi\DampakPengolahanHutan;

class PengolahanHutanController extends Controller
{
    public function index()
    {
    	$data = DampakPengolahanHutan::all();
    	return view('referensi.pengelolaan_hutan.index',compact('data'));
    }

    public function create()
    {
    	return view('referensi.pengelolaan_hutan.create');
    }
    
    public function store(Request $request)
    {
    	$data = new DampakPengolahanHutan();
		$data->jenis_dampak = $request->jenis_dampak;
		$data->save();
		return redirect()->route('pengolahan_hutan');
	}

	public function edit($id)
	{
		$data = DampakPengolahanHutan::findorfail($id);
		return view('referensi.pengelolaan_hutan.edit',compact('data'));
	}

	public function update(Request $request, $id)
	{
		$data = DampakPengolahanHutan::findorfail($id);
		$data->jenis_dampak = $request->jenis_dampak;
		$data->save();
		return redirect()->route('pengolahan_hutan');
	}

	public function destroy($id)
    {
    	$data = DampakPengolahanHutan::find($id);
 		$data->delete();
 		return redirect()->route('pengolahan_hutan');
    }

}
