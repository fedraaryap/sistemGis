<?php

namespace App\Http\Controllers\Referensi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Referensi\EkonomiJasaUsaha;

class EkonomiJasaUsahaController extends Controller
{

    
    public function index()
    {
        $data = EkonomiJasaUsaha::all();
        return view('referensi.ekonomijasausaha.index', compact('data'));
    }

 
    public function create()
    {
        $jasa = EkonomiJasaUsaha::all();
        return view('referensi.ekonomijasausaha.create', compact('jasa'));
    }

    public function store(Request $request)
    {
        $data = new EkonomiJasaUsaha();
        $data->eko_id_jasa_usaha = $request->eko_id_jasa_usaha;
        $data->jasa_usaha = $request->jasa_usaha;
        $data->save();
        return redirect()->route('ekojas');
    }

 
    public function edit($id)
    {
        $data = EkonomiJasaUsaha::findorfail($id);
        $jasa = EkonomiJasaUsaha::all();
        return view('referensi.ekonomijasausaha.create', compact('data','jasa'));
    }

    public function update(Request $request, $id)
    {
        $data = EkonomiJasaUsaha::findorfail($id);
        $data->eko_id_jasa_usaha = $request->eko_id_jasa_usaha;
        $data->jasa_usaha = $request->jasa_usaha;
        $data->save();
        return redirect()->route('ekojas');
    }


    public function destroy($id)
    {
        $data = EkonomiJasaUsaha::find($id);
        $data->delete();
        return redirect()->route('ekojas');
    }
}
