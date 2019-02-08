<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\TenagaKerja;

class TenagaKerjaController extends Controller
{
     public function index()
    {
        $data = TenagaKerja::all();
        return view('DataInduk.TenagaKerja.index',compact('data'));
    }

    public function create()
    {
      
        $JenisKelamin = TenagaKerja::all();
        return view('DataInduk.TenagaKerja.create',compact('JenisKelamin'));
    }
    
    public function store(Request $request)
    {
        $data = new TenagaKerja();
        $data->jenis_tenaga_kerja = $request->jenis_tenaga_kerja;
        $data->jk_tenaga_kerja = $request->jk_tenaga_kerja;
        $data->jumlah_sdm_kerja = $request->jumlah_sdm_kerja;
        $data->save();
        return redirect()->route('tenagaker');
    }

    public function edit($id)
    {
        $data = TenagaKerja::findorfail($id);
        $JenisKelamin = TenagaKerja::all();
        return view('DataInduk.TenagaKerja.edit',compact('data','JenisKelamin'));
    }

    public function update(Request $request, $id)
    {
        $data = TenagaKerja::findorfail($id);
        $data->jenis_tenaga_kerja = $request->jenis_tenaga_kerja;
        $data->jk_tenaga_kerja = $request->jk_tenaga_kerja;
        $data->jumlah_sdm_kerja = $request->jumlah_sdm_kerja;
        $data->save();
        return redirect()->route('tenagaker');
    }

    public function destroy($id)
    {
        $data = TenagaKerja::find($id);
        $data->delete();
        return redirect()->route('tenagaker');
    }
}
