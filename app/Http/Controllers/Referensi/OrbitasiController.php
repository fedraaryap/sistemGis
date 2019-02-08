<?php

namespace App\Http\Controllers\Referensi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Referensi\Orbitasi;

class OrbitasiController extends Controller
{
    public function index()
    {
        $data = Orbitasi::all();
        return view('referensi.orbitasi.index',compact('data'));
    }
    public function create()
    {
        $Orbitas = Orbitasi::all();
        return view('referensi.orbitasi.create', compact('Orbitas'));
    }

    public function store(Request $request)
    {
        $data = new Orbitasi();
        $data->orb_id_orbitasi = $request->orb_id_orbitasi;
        $data->orbitasi = $request->orbitasi;
        $data->save();
        return redirect()->route('orbitasi');
    }

 
    public function edit($id)
    {
        $data = Orbitasi::findorfail($id);
        $Orbitas = Orbitasi::all();
        return view('referensi.orbitasi.create', compact('data','Orbitas'));
    }

    public function update(Request $request, $id)
    {
        $data = Orbitasi::findorfail($id);
        $data->orb_id_orbitasi = $request->orb_id_orbitasi;
        $data->orbitasi = $request->orbitasi;
        $data->save();
        return redirect()->route('orbitasi');
    }


    public function destroy($id)
    {
        $data = Orbitasi::find($id);
        $data->delete();
        return redirect()->route('orbitasi');
    }
}
