<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class JumlahUsiaSdm extends Model
{
	protected $table = 'data_induk.jumlah_usia_sdm';
	protected $primaryKey = 'id_usia_sdm';

	public $timestamps =false;


	public function RangeUsia()
	{
		return $this->belongsTo('App\Model\Referensi\RangeUsia','id_range','id_range');
	}
	public function Desa()
	{
		return $this->belongsTo('App\Model\DaftarDesa\ProfilDesa','id_desa','id_desa');
	}
}
