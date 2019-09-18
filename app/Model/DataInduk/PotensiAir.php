<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class PotensiAir extends Model
{
	protected $table = 'data_induk.potensi_air';
	protected $primaryKey = 'id_potensi_air';

	public $timestamps =false;

	public function Desa()
	{
		return $this->belongsTo('App\Model\DaftarDesa\ProfilDesa','id_desa','id_desa');
	}
}
