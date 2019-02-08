<?php

namespace App\Http\Controllers\Referensi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Referensi\JenisAngkutan;

class JenisAngkutanController extends Controller
{
    
    public function index()
    {
        $data = JenisAngkutan::all();
        return view('referensi.jenis_angkutan.index', compact('data'));
    }

 
    public function create()
    {
        $Angkutan = JenisAngkutan::all();
        return view('referensi.jenis_angkutan.create', compact('Angkutan'));
    }

    public function store(Request $request)
    {
        $data = new JenisAngkutan();
        $data->jen_id_jenis_angkutan = $request->jen_id_jenis_angkutan;
        $data->jenis_angkutan = $request->jenis_angkutan;
        $data->save();
        return redirect()->route('jenisangkutan');
    }

 
    public function edit($id)
    {
        $data = JenisAngkutan::findorfail($id);
        $Angkutan = JenisAngkutan::all();
        return view('referensi.jenis_angkutan.create', compact('data','Angkutan'));
    }

    public function update(Request $request, $id)
    {
        $data = JenisAngkutan::findorfail($id);
        $data->jen_id_jenis_angkutan = $request->jen_id_jenis_angkutan;
        $data->jenis_angkutan = $request->jenis_angkutan;
        $data->save();
        return redirect()->route('jenisangkutan');
    }


    public function destroy($id)
    {
        $data = JenisAngkutan::find($id);
        $data->delete();
        return redirect()->route('jenisangkutan');
    }
}
