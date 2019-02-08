<?php

namespace App\Http\Controllers\Referensi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Referensi\Taman;

class TamanController extends Controller
{
   public function index()
   {
   		$data = Taman::all();
   		return view('referensi.taman.index',compact('data'));
   }
   public function create()
   {
    	return view('referensi.taman.create');
   }
    
   public function store(Request $request)	
   	{
    	$data = new Taman();
		$data->jenis_taman = $request->taman;
		$data->save();
		return redirect()->route('taman');
	}

		public function edit($id)
	{
		$data = Taman::findorfail($id);
		return view('referensi.taman.edit',compact('data'));
	}

	public function update(Request $request, $id)
	{
		$data = Taman::findorfail($id);
		$data->jenis_taman = $request->taman;
		$data->save();
		return redirect()->route('taman');
	}

	public function destroy($id)
    {
    	$data = Taman::find($id);
 		$data->delete();
 		return redirect()->route('taman');
    }
}
