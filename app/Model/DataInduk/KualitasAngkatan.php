<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class KualitasAngkatan extends Model
{
	protected $table = 'data_induk.kualitas_angkatan';
	protected $primaryKey = 'id_angkatan';

	public $timestamps =false;


	public function RangeAngkatan()
	{
		return $this->belongsTo('App\Model\Referensi\RangeUsia','id_range','id_range');
	}
	public function Desa()
	{
		return $this->belongsTo('App\Model\DaftarDesa\ProfilDesa','id_desa','id_desa');
	}
}
