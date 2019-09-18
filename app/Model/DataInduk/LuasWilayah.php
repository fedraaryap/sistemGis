<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class LuasWilayah extends Model
{
	protected $table = 'data_induk.luas_wilayah';
	protected $primaryKey = 'id_luas_wilayah';

	public $timestamps =false;

	public function LuasWil()
	{
		return $this->belongsTo('App\Model\Referensi\WilayahLahan','id_wilayah_lahan','id_wilayah_lahan');
	}

	public function SatuanWil()
	{
		return $this->belongsTo('App\Model\Referensi\Satuan','id_satuan','id_satuan');
	}
	public function Desa()
	{
		return $this->belongsTo('App\Model\DaftarDesa\ProfilDesa','id_desa','id_desa');
	}
}
