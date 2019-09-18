<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class PerangkatDesa extends Model
{
	protected $table = 'data_induk.perangkat_desa';
	protected $primaryKey = 'id_perangkat_desa';
	public $timestamps =false;

	public function Desa()
	{
		return $this->belongsTo('App\Model\DaftarDesa\ProfilDesa','id_desa','id_desa');
	}
}
