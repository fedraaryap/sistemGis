<?php

namespace App\Http\Controllers\Referensi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\referensi\StatusKepemilikan;

class StatusKepemilikanController extends Controller
{
    public function index()
    {
    	$data = StatusKepemilikan::all();
    	return view('referensi.StatusKepemilikan.index',compact('data'));
    }
    public function create()
    {
    	$status = StatusKepemilikan::all();
    	return view('referensi.StatusKepemilikan.create',compact('status'));
    }
    	public function store(Request $request){
		$data = new StatusKepemilikan();
		$data->kepemilikan = $request->kepemilikan;
		$data->status_kepemilikan = $request->status_kepemilikan;
		$data->save();
		return redirect()->route('kepemilikan');
	}

	public function edit($id)
	{
		$data = StatusKepemilikan::findorfail($id);
		return view('referensi.StatusKepemilikan.edit',compact('data'));
	}
	public function update(Request $request, $id){
		$data = StatusKepemilikan::findorfail($id);
		$data->kepemilikan = $request->kepemilikan;
		$data->status_kepemilikan = $request->status_kepemilikan;
		$data->save();
		return redirect()->route('kepemilikan');
	}
	public function destroy($id)
    {
    	$data = StatusKepemilikan::find($id);
 		$data->delete();
 		return redirect()->route('kepemilikan');
    }
}


