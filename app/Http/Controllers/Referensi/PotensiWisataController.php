<?php

namespace App\Http\Controllers\Referensi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Referensi\PotensiWisata;

class PotensiWisataController extends Controller
{
    public function index()
    {
    	$data = PotensiWisata::all();
    	return view('referensi.wisata.index',compact('data'));
    }

    public function create()
    {
    	return view('referensi.wisata.create');
    }
    
    public function store(Request $request)
    {
    	$data = new PotensiWisata();
		$data->lokasi_wisata = $request->wisata;
		$data->save();
		return redirect()->route('wisata');
	}

	public function edit($id)
	{
		$data = PotensiWisata::findorfail($id);
		return view('referensi.wisata.edit',compact('data'));
	}

	public function update(Request $request, $id)
	{
		$data = PotensiWisata::findorfail($id);
		$data->lokasi_wisata = $request->wisata;
		$data->save();
		return redirect()->route('wisata');
	}

	public function destroy($id)
    {
    	$data = PotensiWisata::find($id);
 		$data->delete();
 		return redirect()->route('wisata');
    }
}
