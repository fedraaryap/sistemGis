<?php

namespace App\Http\Controllers\Referensi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Referensi\MekanismePemasaran;

class MekanismePemasaranController extends Controller
{
    public function index()
    {
    	$data = MekanismePemasaran::all();
    	return view('referensi.mekanisme_pemasaran.index',compact('data'));
    }

    public function create()
    {
    	return view('referensi.mekanisme_pemasaran.create');
    }
    
    public function store(Request $request)
    {
    	$data = new MekanismePemasaran();
		$data->mekanisme_pemasaran = $request->mekanisme_pemasaran;
		$data->status_pemasaran = $request->status_pemasaran;
		$data->save();
		return redirect()->route('mekanisme_pemasaran');
	}
		public function edit($id)
	{
		$data = MekanismePemasaran::findorfail($id);
		return view('referensi.mekanisme_pemasaran.edit',compact('data'));
	}

	public function update(Request $request, $id)
	{
		$data = MekanismePemasaran::findorfail($id);
		$data->mekanisme_pemasaran = $request->mekanisme_pemasaran;
		$data->status_pemasaran = $request->status_pemasaran;
		$data->save();
		return redirect()->route('mekanisme_pemasaran');
	}

	public function destroy($id)
    {
    	$data = MekanismePemasaran::find($id);
 		$data->delete();
 		return redirect()->route('mekanisme_pemasaran');
    }

}
