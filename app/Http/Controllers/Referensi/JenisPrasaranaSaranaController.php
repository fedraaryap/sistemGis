<?php

namespace App\Http\Controllers\Referensi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Referensi\JenisPrasaranaSarana;

class JenisPrasaranaSaranaController extends Controller
{
    public function index()
    {
        $data = JenisPrasaranaSarana::all();
        return view('referensi.jenisprasaranasarana.index', compact('data'));
    }

 
    public function create()
    {
        $Prasarana = JenisPrasaranaSarana::all();
        return view('referensi.jenisprasaranasarana.create', compact('Prasarana'));
    }

    public function store(Request $request)
    {
        $data = new JenisPrasaranaSarana();
        $data->jen_id_jenis_prasarana = $request->jen_id_jenis_prasarana;
        $data->jenis_prasarana_sarana = $request->jenis_prasarana_sarana;
        $data->save();
        return redirect()->route('jenprassar');
    }

 
    public function edit($id)
    {
        $data = JenisPrasaranaSarana::findorfail($id);
        $Prasarana = JenisPrasaranaSarana::all();
        return view('referensi.jenisprasaranasarana.create', compact('data','Prasarana'));
    }

    public function update(Request $request, $id)
    {
        $data = JenisPrasaranaSarana::findorfail($id);
        $data->jen_id_jenis_prasarana = $request->jen_id_jenis_prasarana;
        $data->jenis_prasarana_sarana = $request->jenis_prasarana_sarana;
        $data->save();
        return redirect()->route('jenprassar');
    }


    public function destroy($id)
    {
        $data = JenisPrasaranaSarana::find($id);
        $data->delete();
        return redirect()->route('jenprassar');
    }
}
