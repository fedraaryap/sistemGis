<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\Kebisingan;

class KebisinganController extends Controller
{
     public function index()
    {
        $data = Kebisingan::all();
        return view('DataInduk.kebisingan.index',compact('data'));
    }


    public function create()
    {
        $TingkatKebisingan = Kebisingan::all();
        return view('DataInduk.kebisingan.create',compact('TingkatKebisingan'));
    }

  
    public function store(Request $request)
    {
        $data = new Kebisingan;
        $data->id_tingkat_kebisingan = $request->id_tingkat_kebisingan;
        $data->dampak_kebisingan = $request->dampak_kebisingan;
        $data->sumber_kebisingan = $request->sumber_kebisingan;
        $data->efek_terhadap_penduduk = $request->efek_terhadap_penduduk;
        $data->save();
        return redirect()->route('bising');
    }

 
    public function edit($id)
    {
         $data = Kebisingan::findorfail($id);
         $TingkatKebisingan =Kebisingan::all();
        return view('DataInduk.kebisingan.edit',compact('data','TingkatKebisingan'));
    }


    public function update(Request $request, $id)
    {
        $data = Kebisingan::findorfail($id);
        $data->id_tingkat_kebisingan = $request->id_tingkat_kebisingan;
        $data->dampak_kebisingan = $request->dampak_kebisingan;
        $data->sumber_kebisingan = $request->sumber_kebisingan;
        $data->efek_terhadap_penduduk = $request->efek_terhadap_penduduk;
        $data->save();
        return redirect()->route('bising');
    }

 
    public function destroy($id)
    {
        $data = Kebisingan::find($id);
        $data->delete();
        return redirect()->route('bising');
    }
}
