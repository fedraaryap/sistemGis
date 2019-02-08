<?php

namespace App\Http\Controllers\Referensi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Referensi\JenisPendidikan;

class JenisPendidikanController extends Controller
{
    public function index()
    {
    	$data = JenisPendidikan::all();
    	return view('referensi.jenis_pendidikan.index',compact('data'));
    }
    public function create()
    {
    	return view('referensi.jenis_pendidikan.create');
    }
    	public function store(Request $request){
		$data = new JenisPendidikan();
		$data->jenis_pedidikan = $request->jenis_pedidikan;
		$data->save();
		return redirect()->route('jenis_pendidikan');
	}
	public function edit($id)
	{
		$data = JenisPendidikan::findorfail($id);
		return view('referensi.jenis_pendidikan.edit',compact('data'));
	}
	public function update(Request $request, $id){
		$data = JenisPendidikan::findorfail($id);
		$data->jenis_pedidikan = $request->jenis_pedidikan;
		$data->save();
		return redirect()->route('jenis_pendidikan');
	}
	public function destroy($id)
    {
    	$data = JenisPendidikan::find($id);
 		$data->delete();
 		return redirect()->route('jenis_pendidikan');
    }
}
