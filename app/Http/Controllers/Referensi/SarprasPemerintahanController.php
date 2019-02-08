<?php

namespace App\Http\Controllers\Referensi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Referensi\SarprasPemerintahan;

class SarprasPemerintahanController extends Controller
{
   public function index()
    {
        $data = SarprasPemerintahan::all();
        return view('referensi.saranapemerintahan.index',compact('data'));
    }

    public function create()
    {
        $sarpem = SarprasPemerintahan::all();
        return view('referensi.saranapemerintahan.create',compact('sarpem'));
    }
    
    public function store(Request $request)
    {
        $data = new SarprasPemerintahan();
        $data->Sar_id_sarpras_pemerintahan = $request->Sar_id_sarpras_pemerintahan;
        $data->jenis_sarpras_pemerintahan= $request->jenis_sarpras_pemerintahan;
        $data->save();
        return redirect()->route('SarprasPem');
    }

    public function edit($id)
    {
        $data = SarprasPemerintahan::findOrFail($id);
        $sarpem = SarprasPemerintahan::all();
        return view('referensi.saranapemerintahan.edit',compact('data','sarpem'));
    }

    public function update(Request $request, $id)
    {
        $data = SarprasPemerintahan::findorfail($id);
        $data->Sar_id_sarpras_pemerintahan = $request->Sar_id_sarpras_pemerintahan;
        $data->jenis_sarpras_pemerintahan= $request->jenis_sarpras_pemerintahan;
        $data->save();
        return redirect()->route('SarprasPem');
    }

    public function destroy($id)
    {
        $data = SarprasPemerintahan::find($id);
        $data->delete();
        return redirect()->route('SarprasPem');
    }
}
