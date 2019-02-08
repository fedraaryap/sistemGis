<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\StatusSaranaTransportasi;

class StatusSaranaTransportasiController extends Controller
{
   public function index()
    {
        $data = StatusSaranaTransportasi::all();
        return view('DataInduk.statussaranatransportasi.index',compact('data'));
    }

    public function create()
    {
      
        $SaranaTransportasi = StatusSaranaTransportasi::all();
        $Keberadaan = StatusSaranaTransportasi::all();
        return view('DataInduk.statussaranatransportasi.create',compact('Taman','SaranaTransportasi','Keberadaan'));
    }
    
    public function store(Request $request)
    {
        $data = new StatusSaranaTransportasi();
        $data->id_sarana_transportasi = $request->id_sarana_transportasi;
        $data->kebradaan_transportasi = $request->kebradaan_transportasi;
        $data->jumlah = $request->jumlah;
        
        $data->save();
        return redirect()->route('stattrans');
    }

    public function edit($id)
    {
        $data = StatusSaranaTransportasi::findorfail($id);
        $SaranaTransportasi =StatusSaranaTransportasi::all();
        $Keberadaan = StatusSaranaTransportasi::all();
        return view('DataInduk.statussaranatransportasi.edit',compact('data','SaranaTransportasi','Keberadaan'));
    }

    public function update(Request $request, $id)
    {
        $data = StatusSaranaTransportasi::findorfail($id);
        $data->id_sarana_transportasi = $request->id_sarana_transportasi;
        $data->kebradaan_transportasi = $request->kebradaan_transportasi;
        $data->jumlah = $request->jumlah;
        $data->save();
        return redirect()->route('stattrans');
    }

    public function destroy($id)
    {
        $data = StatusSaranaTransportasi::find($id);
        $data->delete();
        return redirect()->route('stattrans');
    }
}
