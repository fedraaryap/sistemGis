<?php

namespace App\Http\Controllers\Referensi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Referensi\Batas;

class BatasController extends Controller
{
    public function index()
    {
    	$data = batas::all();
    	return view('referensi.batas.index',compact('data'));
    }
    public function create()
    {
    	return view('referensi.batas.create');
    }
    	public function store(Request $request){
		$data = new batas();
		$data->batas = $request->batas;
		$data->save();
		return redirect()->route('batas');
	}

	public function edit($id)
	{
		$data = Batas::findorfail($id);
		return view('referensi.batas.edit',compact('data'));
	}
	public function update(Request $request, $id){
		$data = batas::findorfail($id);
		$data->batas = $request->batas;
		$data->save();
		return redirect()->route('batas');
	}
	public function destroy($id)
    {
    	$data = batas::find($id);
 		$data->delete();
 		return redirect()->route('batas');
    }
}

