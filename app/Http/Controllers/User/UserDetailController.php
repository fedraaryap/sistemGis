<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Potensi\PotensiKeLembagaan;
use App\Model\DataInduk\LembagaPendidikan;
use App\Model\DataInduk\LembagaKeamanan;
use App\Model\DataInduk\JumlahLembagaPolitik;
use App\Model\DataInduk\Wilayah;
use App\Model\DataInduk\PerangkatDesa;

use DB;


class UserDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pendidikan($id)
    {
      $jum_pendidikan = DB::table('data_desa.profil_desa')->SELECT('nama_wil', 'jenis_pendidikan','nama_sekolah','jumlah_sekolah','jumlah_pengajar','status_sekolah','jumlah_siswa','kepemilikan')->leftJoin('data_induk.wilayah','profil_desa.id_wilayah','=','wilayah.id_wilayah')->leftJoin('data_induk.lembaga_pendidikan','lembaga_pendidikan.id_desa','=','profil_desa.id_desa')->leftJoin('referensi.nama_sekolah','lembaga_pendidikan.id_sekolah','=','nama_sekolah.id_sekolah')->leftJoin('referensi.jenis_pendidikan','nama_sekolah.id_jenis_pendidikan','=','jenis_pendidikan.id_jenis_pendidikan')->where('wilayah.nama_wil',$id)->get($id);
      //dd($jum_pendidikan);
        return  
        view('userdetail',['data'=>$jum_pendidikan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function keamanan($id)
    {
        $jum_keamanan = DB::table('data_desa.profil_desa')->SELECT('nama_wil','jenis_keamanan','jumlah_anggota','jumlah_poskamling','jumlah_kegiaatan','nama_organisasi_induk','status')->leftJoin('data_induk.wilayah','profil_desa.id_wilayah','=','wilayah.id_wilayah')->leftJoin('data_induk.lembaga_keamanan','lembaga_keamanan.id_desa','=','profil_desa.id_desa')->leftJoin('referensi.jenis_keamanan','lembaga_keamanan.id_jenis_keamanan','=','jenis_keamanan.id_jenis_keamanan')->where('wilayah.nama_wil',$id)->get();
//dd($jum_keamanan);
             return
             view('detailkeamanan',['data'=>$jum_keamanan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
