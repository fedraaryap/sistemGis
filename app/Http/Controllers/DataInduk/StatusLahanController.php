<?php

namespace App\Http\Controllers\DataInduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\StatusLahan;

class StatusLahanController extends Controller
{
       public function index()
    {
        $data = StatusLahan::all();
        return view('DataInduk.StatusLahan.index',compact('data'));
    }

    public function create()
    {
      
        $Taman = StatusLahan::all();
        $Wisata = StatusLahan::all();
        $Awisata = StatusLahan::all();
        $Ataman = StatusLahan::all();
        $Keberadaan = StatusLahan::all();

        return view('DataInduk.StatusLahan.create',compact('Taman','Wisata','Awisata','Ataman','Keberadaan'));
    }
    
    public function store(Request $request)
    {
        $data = new StatusLahan();
        $data->id_taman = $request->id_taman;
        $data->id_wisata = $request->id_wisata;
        $data->keberadaan = $request->keberadaan;
        $data->luas = $request->luas;
        $data->tingkat_pemanfaatan = $request->tingkat_pemanfaatan;
        $data->a_wisata = $request->a_wisata;
        $data->a_taman = $request->a_taman;
        $data->save();
        return redirect()->route('statlahan');
    }

    public function edit($id)
    {
        $data = StatusLahan::findorfail($id);
        $Taman = StatusLahan::all();
        $Wisata = StatusLahan::all();
        $Awisata = StatusLahan::all();
        $Ataman = StatusLahan::all();
        $Keberadaan = StatusLahan::all();
        return view('DataInduk.StatusLahan.edit',compact('data','Taman','Wisata','Awisata','Ataman','Keberadaan'));
    }

    public function update(Request $request, $id)
    {
        $data = StatusLahan::findorfail($id);
        $data->id_taman = $request->id_taman;
        $data->id_wisata = $request->id_wisata;
        $data->keberadaan = $request->keberadaan;
        $data->luas = $request->luas;
        $data->tingkat_pemanfaatan = $request->tingkat_pemanfaatan;
        $data->a_wisata = $request->a_wisata;
        $data->a_taman = $request->a_taman;
        $data->save();
        return redirect()->route('statlahan');
    }

    public function destroy($id)
    {
        $data = StatusLahan::find($id);
        $data->delete();
        return redirect()->route('statlahan');
    }
}
