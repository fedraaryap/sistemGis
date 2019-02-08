<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\StatusSarprasPemerintahan;

class StatSarprasPemerintahController extends Controller
{
    public function index()
    {
    	$data = StatusSarprasPemerintahan::all();
    	return view('DataInduk.statussarpraspemerintah.index',compact('data'));
    }

      public function create()
    {
        $SarprasPemerintahan = StatusSarprasPemerintahan::all();
        $SatuanPrasarana = StatusSarprasPemerintahan::all();
        return view('DataInduk.statussarpraspemerintah.create',compact('SarprasPemerintahan','SatuanPrasarana'));
    }

  
    public function store(Request $request)
    {
        $data = new StatusSarprasPemerintahan;
        $data->id_satuan_prasarana = $request->id_satuan_prasarana;
        $data->id_sarpas_pemerintahan = $request->id_sarpras_pemerintahan;
        $data->jumlah = $request->jumlah;
        $data->a_memiliki_status = $request->a_memiliki_status;
        $data->status_sarpras = $request->status_sarpras;
        $data->save();
        return redirect()->route('sarpem');
    }

 
    public function edit($id)
    {
        $data = StatusSarprasPemerintahan::findorfail($id);
        $SarprasPemerintahan = StatusSarprasPemerintahan::all();
        $SatuanPrasarana = StatusSarprasPemerintahan::all();
        return view('DataInduk.statussarpraspemerintah.edit',compact('data','SarprasPemerintahan','SatuanPrasarana'));
    }


    public function update(Request $request, $id)
    {
        $data = StatusSarprasPemerintahan::findorfail($id);
        $data->id_satuan_prasarana = $request->id_satuan_prasarana;
        $data->id_sarpas_pemerintahan = $request->id_sarpras_pemerintahan;
        $data->jumlah = $request->jumlah;
        $data->a_memiliki_status = $request->a_memiliki_status;
        $data->status_sarpras = $request->status_sarpras;
        $data->save();
        return redirect()->route('sarpem');
    }

 
    public function destroy($id)
    {
        $data = StatusSarprasPemerintahan::find($id);
        $data->delete();
        return redirect()->route('sarpem');
    }
}
