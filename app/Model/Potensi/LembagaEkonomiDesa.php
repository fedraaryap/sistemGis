<?php

namespace App\model\Potensi;

use Illuminate\Database\Eloquent\Model;

class LembagaEkonomiDesa extends Model
{
	protected $table = 'potensi.lembaga_ekonomi_desa';
	protected $primaryKey = 'id_ekonomi';
	public $timestamps =false;

	public function ProfilDesa()
	{
		return $this->belongSTo('App\Model\DaftarDesa\ProfilDesa','id_desa','id_desa');
	}


	public function JumlahOrang()
	{
		return $this->belongSTo('App\Model\DataInduk\JumlahOrang','id_jumlah_orang','id_jumlah_orang');
	}

	public function StatusJasaUsaha()
	{
		return $this->belongSTo('App\Model\DataInduk\StatusJasaUsaha','id_stat_jasa_usaha','id_stat_jasa_usaha');
	}

	public function JumlahAngkutan()
	{
		return $this->belongSTo('App\Model\DataInduk\JumlahAngkutan','id_pengangkutan','id_pengangkutan');
	}

	
}

