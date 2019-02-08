<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\StatusPrasarana;

class StatusPrasaranaController extends Controller
{
       public function index()
    {
        $data = StatusPrasarana::all();
        return view('DataInduk.statusprasarana.index',compact('data'));
    }

    public function create()
    {
      
        $JenisPrasarana = StatusPrasarana::all();
        $SatuanPrasarana = StatusPrasarana::all();
        $Kondisi = StatusPrasarana::all();

        return view('DataInduk.statusprasarana.create',compact('JenisPrasarana','SatuanPrasarana','Kondisi'));
    }
    
    public function store(Request $request)
    {
        $data = new StatusPrasarana();
        $data->id_jenis_prasarana = $request->id_jenis_prasarana;
        $data->id_satuan_prasarana = $request->id_satuan_prasarana;
        $data->kondisi_prasarana_sarana = $request->kondisi_prasarana_sarana;
        $data->save();
        return redirect()->route('statprasarana');
    }

    public function edit($id)
    {
        $data = StatusPrasarana::findorfail($id);
        $JenisPrasarana = StatusPrasarana::all();
        $SatuanOrbitasi = StatusPrasarana::all();
        $Kondisi = StatusPrasarana::all();
        return view('DataInduk.statusprasarana.edit',compact('data','JenisPrasarana','SatuanOrbitasi','Kondisi'));
    }

    public function update(Request $request, $id)
    {
        $data = StatusPrasarana::findorfail($id);
        $data->id_jenis_prasarana = $request->id_jenis_prasarana;
        $data->id_satuan_prasarana = $request->id_satuan_prasarana;
        $data->kondisi_prasarana_sarana = $request->kondisi_prasarana_sarana;
        $data->save();
        return redirect()->route('statprasarana');
    }

    public function destroy($id)
    {
        $data = StatusPrasarana::find($id);
        $data->delete();
        return redirect()->route('statprasarana');
    }
}
