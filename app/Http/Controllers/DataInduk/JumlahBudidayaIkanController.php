<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\JumlahBudidayaIkan;
use App\Model\Referensi\BudidayaIkan;
use App\Model\DataInduk\Wilayah;
use App\Model\Referensi\lVNamaWilayah;

class JumlahBudidayaIkanController extends Controller
{
     public function index()
    {
        $data = JumlahBudidayaIkan::get();
        return view('DataInduk.jumlahbudidayaikan.index',compact('data'));
    }


    public function create()
    {
        $BudidayaIkan = BudidayaIkan::all();
        $Level = lVNamaWilayah::all();
        $Wilayah = Wilayah::all();
        return view('DataInduk.jumlahbudidayaikan.create',compact('BudidayaIkan','Level','Wilayah'));
    }

  
    public function store(Request $request)
    {
        $data = new JumlahBudidayaIkan();
        $wil= new Wilayah();
        $data->id_desa =$request->id_desa;
        $wil->wil_id_wilayah = $request->wil_id_wilayah;
        $wil->nama_wil = $request->nama_wil;
        $wil->id_lv_wil = $request->id_lv_wil;
        $data->id_budidaya_ikan = $request->id_budidaya_ikan;
        $data->jumlah_budidaya_ikan = $request->jumlah_budidaya_ikan;
        $data->jumlah_produksi_ikan = $request->jumlah_produksi_ikan;
        $data->save();
        return redirect()->route('jumbudikan','wilayah');
    }

 
    public function edit($id)
    {
         $data = JumlahBudidayaIkan::findorfail($id);
         $BudidayaIkan =BudidayaIkan::all();
        return view('DataInduk.jumlahbudidayaikan.edit',compact('data','BudidayaIkan'));
    }


    public function update(Request $request, $id)
    {
        $data = JumlahBudidayaIkan::findorfail($id);
        $data->id_desa =$request->id_desa;
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
