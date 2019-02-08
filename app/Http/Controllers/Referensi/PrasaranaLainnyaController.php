<?php

namespace App\Http\Controllers\Referensi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Referensi\PrasaranaLainnya;

class PrasaranaLainnyaController extends Controller
{
    public function index()
    {
        $data = PrasaranaLainnya::all();
        return view('referensi.prasarana_lainnya.index', compact('data'));
    }

 
    public function create()
    {
        $pralainnya = PrasaranaLainnya::all();
        return view('referensi.prasarana_lainnya.create', compact('pralainnya'));
    }

    public function store(Request $request)
    {
        $data = new PrasaranaLainnya();
        $data->pra_id_prasarana_lainnya = $request->pra_id_prasarana_lainnya;
        $data->macam_prasarana_sarana = $request->macam_prasarana_sarana;
        $data->save();
        return redirect()->route('praslainnya');
    }

 
    public function edit($id)
    {
        $data = PrasaranaLainnya::findorfail($id);
        $pralainnya = PrasaranaLainnya::all();
        return view('referensi.prasarana_lainnya.create', compact('data','pralainnya'));
    }

    public function update(Request $request, $id)
    {
        $data = PrasaranaLainnya::findorfail($id);
        $data->pra_id_prasarana_lainnya = $request->pra_id_prasarana_lainnya;
        $data->macam_prasarana_sarana = $request->macam_prasarana_sarana;
        $data->save();
        return redirect()->route('praslainnya');
    }


    public function destroy($id)
    {
        $data = PrasaranaLainnya::find($id);
        $data->delete();
        return redirect()->route('praslainnya');
    }
}
