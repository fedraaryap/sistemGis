<?php

namespace App\model\Potensi;

use Illuminate\Database\Eloquent\Model;

class PotensiKelembagaan extends Model
{
	protected $table = 'potensi.potensi_kelembagaan';
	protected $primaryKey = 'id_kelembagaan';

	public $timestamps =false;

	public function ProfilDesa()
	{
		return $this->belongSTo('App\Model\DaftarDesa\ProfilDesa','id_desa','id_desa');
	}


	public function Lempendidikan()
	{
		return $this->belongSTo('App\Model\DataInduk\LembagaPendidikan','id_pendidikan','id_pendidikan');
	}

	public function  keamanan()
	{
		return $this->belongSTo('App\Model\DataInduk\LembagaKeamanan','id_keamanan','id_keamanan');
	}

	public function JumlahLembaga()
	{
		return $this->belongSTo('App\Model\DataInduk\JumlahLembagaPolitik','id_jumlah_lembaga','id_jumlah_lembaga');
	}


}
