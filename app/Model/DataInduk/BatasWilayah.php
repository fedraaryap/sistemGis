<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class BatasWilayah extends Model
{
	protected $table = 'data_induk.batas_wilayah';
	protected $primaryKey = 'id_batas_wilayah';

	public $timestamps =false;


	public function Batas()
	{
		return $this->belongsTo('App\Model\Referensi\Batas','id_batas','id_batas');
	}

	public function Desa()
	{
		return $this->belongsTo('App\Model\DaftarDesa\ProfilDesa','id_desa','id_desa');
	}

}
