<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\StatPrasaranaLainnya;

class StatPrasaranaLainnyaController extends Controller

{
     public function index()
    {
        $data = StatPrasaranaLainnya::get();
        return view('DataInduk.statprasaranalainnya.index',compact('data'));
    }

      public function create()
    {
        $Prasarana = StatPrasaranaLainnya::all();
        $SatuanPrasarana = StatPrasaranaLainnya::all();
        $Status = StatPrasaranaLainnya::all();
        $ApakahAda = StatPrasaranaLainnya::all();
        return view('DataInduk.statprasaranalainnya.create',compact('Prasarana','SatuanPrasarana','Status','ApakahAda'));
    }

  
    public function store(Request $request)
    {
        $data = new StatPrasaranaLainnya;
        $data->id_prasarana_sarana = $request->id_prasarana_sarana;
        $data->id_satuan_prasarana = $request->id_satuan_prasarana;
        $data->jumlah = $request->jumlah;
        $data->a_ada_status = $request->a_ada_status;
        $data->status_prasarana_sarana = $request->status_prasarana_sarana;
        $data->save();
        return redirect()->route('statpraslainnya');
    }

 
    public function edit($id)
    {
        $data = StatPrasaranaLainnya::findorfail($id);
        $Prasarana = StatPrasaranaLainnya::all();
        $SatuanPrasarana = StatPrasaranaLainnya::all();
        $Status = StatPrasaranaLainnya::all();
        $ApakahAda = StatPrasaranaLainnya::all();
        return view('DataInduk.statprasaranalainnya.edit',compact('data','Prasarana','SatuanPrasarana','Status','ApakahAda'));
    }


    public function update(Request $request, $id)
    {
        $data = StatPrasaranaLainnya::findorfail($id);
        $data->id_prasarana_sarana = $request->id_prasarana_sarana;
        $data->id_satuan_prasarana = $request->id_satuan_prasarana;
        $data->jumlah = $request->jumlah;
        $data->a_ada_status = $request->a_ada_status;
        $data->status_prasarana_sarana = $request->status_prasarana_sarana;
        return redirect()->route('statpraslainnya');
    }

 
    public function destroy($id)
    {
        $data = StatPrasaranaLainnya::find($id);
        $data->delete();
        return redirect()->route('statpraslainnya');
    }

}
