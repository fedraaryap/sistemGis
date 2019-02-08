<?php

namespace App\Http\Controllers\Referensi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Referensi\JenisKeamanan;

class JenisKeamananController extends Controller
{
   public function index()
    {
    	$data = JenisKeamanan::all();
    	return view('referensi.jenis_keamanan.index',compact('data'));
    }
    public function create()
    {
    	return view('referensi.jenis_keamanan.create');
    }
    	public function store(Request $request){
		$data = new JenisKeamanan();
		$data->jenis_keamanan = $request->jenis_keamanan;
		$data->save();
		return redirect()->route('keamanan');
	}
	public function edit($id)
	{
		$data = JenisKeamanan::findorfail($id);
		return view('referensi.jenis_keamanan.edit',compact('data'));
	}
	public function update(Request $request, $id){
		$data = JenisKeamanan::findorfail($id);
		$data->jenis_keamanan = $request->jenis_keamanan;
		$data->save();
		return redirect()->route('keamanan');
	}
	public function destroy($id)
    {
    	$data = JenisKeamanan::find($id);
 		$data->delete();
 		return redirect()->route('keamanan');
    }
}
