<?php

namespace App\Http\Controllers\Referensi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Referensi\KondisiHutan;

class KondisiHutanController extends Controller
{
    public function index()
    {
    	$data = KondisiHutan::all();
    	return view('referensi.kondisi_hutan.index',compact('data'));
    }


    public function create()
    {
    	return view('referensi.kondisi_hutan.create');
    }
    
    public function store(Request $request)
    {
    	$data = new KondisiHutan();
		$data->jenis_hutan = $request->jenis_hutan;
		$data->save();
		return redirect()->route('kondisi_hutan');
	}

	public function edit($id)
	{
		$data = KondisiHutan::findorfail($id);
		return view('referensi.kondisi_hutan.edit',compact('data'));
	}

	public function update(Request $request, $id)
	{
		$data = KondisiHutan::findorfail($id);
		$data->jenis_hutan = $request->jenis_hutan;
		$data->save();
		return redirect()->route('kondisi_hutan');
	}

	public function destroy($id)
    {
    	$data = KondisiHutan::find($id);
 		$data->delete();
 		return redirect()->route('kondisi_hutan');
    }

	
}
