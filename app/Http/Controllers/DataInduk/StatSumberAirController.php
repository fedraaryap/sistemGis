<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\StatusSumberAir;

class StatSumberAirController extends Controller
{
    public function index()
    {
    	$data = StatusSumberAir::all();
    	return view('DataInduk.statussumberair.index',compact('data'));
    }

    public function create()
    {
    	$SumberAir = StatusSumberAir::all();
    	$Status = StatusSumberAir::all();
    	return view('DataInduk.statussumberair.create',compact('SumberAir','Status'));
    }
    
    public function store(Request $request)
    {
    	$data = new StatusSumberAir();
    	$data->id_desa =$request->id_desa;
		$data->id_sumber_air = $request->id_sumber_air;
		$data->status_sumber = $request->status_air;
		$data->save();
		return redirect()->route('statsumair');
	}

	public function edit($id)
	{
		$data = StatusSumberAir::findorfail($id);
		$SumberAir = StatusSumberAir::all();
    	$Status = StatusSumberAir::all();
		return view('DataInduk.statussumberair.edit',compact('data','SumberAir','Status'));
	}

	public function update(Request $request, $id)
	{
		$data = StatusSumberAir::findorfail($id);
		$data->id_desa =$request->id_desa;
		$data->id_sumber_air = $request->id_sumber_air;
		$data->status_sumber = $request->status_air;
		$data->save();
		return redirect()->route('statsumair');
	}

	public function destroy($id)
    {
    	$data = StatusSumberAir::find($id);
 		$data->delete();
 		return redirect()->route('statsumair');
    }

}

