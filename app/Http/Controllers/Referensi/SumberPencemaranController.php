<?php

namespace App\Http\Controllers\Referensi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Referensi\SumberPencemaran;

class SumberPencemaranController extends Controller
{
    public function index()
    {
    	$data = SumberPencemaran::all();
    	return view('referensi.pencemaran.index',compact('data'));
    }

    public function create()
    {
    	return view('referensi.pencemaran.create');
    }
    
    public function store(Request $request)
    {
    	$data = new SumberPencemaran();
		$data->sumber = $request->sumber_pencemaran;
		$data->save();
		return redirect()->route('pencemaran');
	}

	public function edit($id)
	{
		$data = SumberPencemaran::findorfail($id);
		return view('referensi.pencemaran.edit',compact('data'));
	}

	public function update(Request $request, $id)
	{
		$data = SumberPencemaran::findorfail($id);
		$data->sumber = $request->sumber_pencemaran;
		$data->save();
		return redirect()->route('pencemaran');
	}

	public function destroy($id)
    {
    	$data = SumberPencemaran::find($id);
 		$data->delete();
 		return redirect()->route('pencemaran');
    }
}
