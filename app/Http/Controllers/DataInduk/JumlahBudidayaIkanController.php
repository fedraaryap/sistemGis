<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\JumlahBudidayaIkan;

class JumlahBudidayaIkanController extends Controller
{
     public function index()
    {
        $data = JumlahBudidayaIkan::all();
        return view('DataInduk.jumlahbudidayaikan.index',compact('data'));
    }


    public function create()
    {
        $BudidayaIkan = JumlahBudidayaIkan::all();
        return view('DataInduk.jumlahbudidayaikan.create',compact('BudidayaIkan'));
    }

  
    public function store(Request $request)
    {
        $data = new JumlahBudidayaIkan;
        $data->id_budidaya_ikan = $request->id_budidaya_ikan;
        $data->jumlah_budidaya_ikan = $request->jumlah_budidaya_ikan;
        $data->jumlah_produksi_ikan = $request->jumlah_produksi_ikan;
        $data->save();
        return redirect()->route('jumbudikan');
    }

 
    public function edit($id)
    {
         $data = JumlahBudidayaIkan::findorfail($id);
         $BudidayaIkan =JumlahBudidayaIkan::all();
        return view('DataInduk.jumlahbudidayaikan.edit',compact('data','BudidayaIkan'));
    }


    public function update(Request $request, $id)
    {
        $data = JumlahBudidayaIkan::findorfail($id);
        $data->id_budidaya_ikan = $request->id_budidaya_ikan;
        $data->jumlah_budidaya_ikan = $request->jumlah_budidaya_ikan;
        $data->jumlah_produksi_ikan = $request->jumlah_produksi_ikan;
        $data->save();
        return redirect()->route('jumbudikan');
    }

 
    public function destroy($id)
    {
        $data = JumlahBudidayaIkan::find($id);
        $data->delete();
        return redirect()->route('jumbudikan');
    }
}
