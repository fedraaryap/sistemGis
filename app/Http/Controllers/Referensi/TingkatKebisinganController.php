<?php

namespace App\Http\Controllers\Referensi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Referensi\TingkatKebisingan;

class TingkatKebisinganController extends Controller
{
    public function index()
    {
    	$data = TingkatKebisingan::all();
    	return view('referensi.kebisingan.index',compact('data'));	
    }

    public function create()
    {
    	return view('referensi.kebisingan.create');
    }

    public function store(Request $request)
    {
		$data = new TingkatKebisingan();
		$data->tingkat_kebisingan = $request->tingkat_kebisingan;
		$data->save();
		return redirect()->route('kebisingan');
	}

	public function edit($id)
	{
		$data = TingkatKebisingan::findorfail($id);
		return view('referensi.kebisingan.edit',compact('data'));
	}

	public function update(Request $request, $id)
	{
		$data = TingkatKebisingan::findorfail($id);
		$data->tingkat_kebisingan = $request->tingkat_kebisingan;
		$data->save();
		return redirect()->route('kebisingan');
	}
	public function destroy($id)
    {
 		$data = TingkatKebisingan::find($id);
 		$data->delete();
    	return redirect()->route('kebisingan');
    }
}


