<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class BahanGalian extends Model
{
	protected $table = 'data_induk.bahan_galian';
	protected $primaryKey = 'id_galian';

	public $timestamps =false;


	public function Kepemilikan()
	{
		return $this->belongsTo('App\Model\Referensi\StatusKepemilikan','id_status_kepemilikan','id_status_kepemilikan');
	}

	public function Desa()
	{
		return $this->belongsTo('App\Model\DaftarDesa\ProfilDesa','id_desa','id_desa');
	}
}
