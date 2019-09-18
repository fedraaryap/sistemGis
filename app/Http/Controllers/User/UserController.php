<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DataInduk\Wilayah;
use App\Model\DaftarDesa\ProfilDesa;
use App\Model\Potensi\PotensiKelembagaan;
use App\Model\DataInduk\LembagaPendidikan;
use App\Model\Referensi\NamaSekolah;
use App\Model\Referensi\JenisPendidikan;

use DB;

class UserController extends Controller
{
   

    public function jumlah_pendidikan()
    {
        $desa = DB::SELECT("SELECT gid, desa, ST_AsGeoJSON(geom) AS geo From desaindonesia Group by gid");
            $des = [];
            $coodinate = [];
            $des_baru_baru = [];
            $keamanan =[];
            
            foreach ($desa as $each_des) {
                $geom = json_decode($each_des->geo);
                $coodinate[] = $geom->coordinates[0][0];
                $des_baru = [];
                $des_baru['gid']    = $each_des->gid;
                $des_baru['desa']   = $each_des->desa;
                $des_baru['geo']    = json_decode($each_des->geo);
               
               
                $des[$each_des->desa] = $des_baru;
                $keamanan =(['jumlah keamanan'=>$des]);
                $des_baru_baru=(['lembaga pendidikan'=>$des]);

            }


             $jum_pendidikan = DB::table('data_desa.profil_desa')->SELECT('nama_wil', DB::RAW('SUM(jumlah_sekolah) as "Jumlah_Pendidikan"'), DB::RAW('SUM(jumlah_pengajar) as "Jumlah_Pengajar"'))->leftJoin('data_induk.wilayah','profil_desa.id_wilayah','=','wilayah.id_wilayah')->leftJoin('data_induk.lembaga_pendidikan','lembaga_pendidikan.id_desa','=','profil_desa.id_desa')->leftJoin('referensi.nama_sekolah','lembaga_pendidikan.id_sekolah','=','nama_sekolah.id_sekolah')->leftJoin('referensi.jenis_pendidikan','nama_sekolah.id_jenis_pendidikan','=','jenis_pendidikan.id_jenis_pendidikan')->where('id_tahun','2017')->groupBy('nama_wil')->get();
            //dd($jum_pendidikan);
              foreach ($jum_pendidikan as $pend) {
                $des_baru_baru['lembaga pendidikan'][trim($pend->nama_wil)]['jumlah_sekolah'] = $pend->Jumlah_Pendidikan;
                $des_baru_baru['lembaga pendidikan'][trim($pend->nama_wil)]['jumlah_pendidikan'] = $pend->Jumlah_Pengajar;
            }

             $jum_keamanan = DB::table('data_desa.profil_desa')->SELECT('nama_wil', DB::RAW('SUM(jumlah_anggota) as "anggota"'))->leftJoin('data_induk.wilayah','profil_desa.id_wilayah','=','wilayah.id_wilayah')->leftJoin('data_induk.lembaga_keamanan','profil_desa.id_desa','=','lembaga_keamanan.id_desa')->leftJoin('referensi.jenis_keamanan','lembaga_keamanan.id_jenis_keamanan','=','jenis_keamanan.id_jenis_keamanan')->where('id_tahun','2017')->groupBy('nama_wil')->get();
             foreach ($jum_keamanan as $aman) {
                $keamanan['jumlah keamanan'][trim($aman->nama_wil)]['jumlah_anggota'] = $aman->anggota;
             
            


        }           
  //dd($des_baru_baru);
          return view('PetaDesa',[
               'des' => json_encode($des_baru_baru['lembaga pendidikan']),
      
           ]);



    }

    public function lembagakeamanan()
    {
      $desa = DB::SELECT("SELECT gid, desa, ST_AsGeoJSON(geom) AS geo From desaindonesia Group by gid");
            $des = [];
            $coodinate = [];
            $des_baru_baru = [];
            $keamanan =[];
            
            foreach ($desa as $each_des) {
                $geom = json_decode($each_des->geo);
                $coodinate[] = $geom->coordinates[0][0];
                $des_baru = [];
                $des_baru['gid']    = $each_des->gid;
                $des_baru['desa']   = $each_des->desa;
                $des_baru['geo']    = json_decode($each_des->geo);
               
               // $des_baru_baru[$each_des->desa] = $des_baru;
                $des[$each_des->desa] = $des_baru;
                $keamanan =(['jumlah keamanan'=>$des]);
                $des_baru_baru=(['lembaga pendidikan'=>$des]);

                //$des[$each_des->desa][] = $des_baru;
               //$des[$each_des->desa] =((object)[ 'type'=>'MultiPolygon','coordinates'=>$coodinate]);
            }
              $jum_keamanan = DB::table('data_desa.profil_desa')->SELECT('nama_wil', DB::RAW('SUM(jumlah_anggota) as "anggota"'))->leftJoin('data_induk.wilayah','profil_desa.id_wilayah','=','wilayah.id_wilayah')->leftJoin('data_induk.lembaga_keamanan','profil_desa.id_desa','=','lembaga_keamanan.id_desa')->leftJoin('referensi.jenis_keamanan','lembaga_keamanan.id_jenis_keamanan','=','jenis_keamanan.id_jenis_keamanan')->where('id_tahun','2017')->groupBy('nama_wil')->get();
             foreach ($jum_keamanan as $aman) {
                $keamanan['jumlah keamanan'][trim($aman->nama_wil)]['jumlah_anggota'] = $aman->anggota;
            }

            return view('keamanan',['keamanan'=>json_encode($keamanan['jumlah keamanan'])]);
    }



}   
