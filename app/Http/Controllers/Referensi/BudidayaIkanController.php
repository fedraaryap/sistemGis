<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\BudidayaIkan;

class BudidayaIkanController extends Controller
{
  
    public function index()
    {
        $data = BudidayaIkan::all();
        return view('DataInduk.BudidayaIkan.index',compact('data'));
    }


    public function create()
    {
        $Budidaya = BudidayaIkan::all();
        return view('DataInduk.BudidayaIkan.create',compact('budidaya'));   
    }

   
    public function store(Request $request)
    {
        $data = new BudidayaIkan();
        $data->bud_id_budidaya_ikan = $request->bud_id_budidaya_ikan;
        $data->jenis_budidaya_ikan = $request->jenis_budidaya_ikan;
        $data->save();
        return redirect()->route('ikan');
    }

 
    public function edit($id)
    {
         $data = BudidayaIkan::findorfail($id);
         $Budidaya = BudidayaIkan::all();
        return view('DataInduk.BudidayaIkan.edit',compact('data','budidaya'));
    }


    public function update(Request $request, $id)
    {
        $data = BudidayaIkan::findorfail($id);
        $data->bud_id_budidaya_ikan = $request->bud_id_budidaya_ikan;
        $data->jenis_budidaya_ikan = $request->jenis_budidaya_ikan;
        $data->save();
        return redirect()->route('ikan');
    }
        
         public function destroy($id)
    {
        $data = BudidayaIkan::find($id);
        $data->delete();
        return redirect()->route('ikan');
    }
}
