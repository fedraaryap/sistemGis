<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class Kebisingan extends Model
{
	protected $table = 'data_induk.kebisingan';
	protected $primaryKey = 'id_kebisingan';

	public $timestamps =false;


	public function TingkatKebisingan()
	{
		return $this->belongsTo('App\Model\Referensi\TingkatKebisingan','id_tingkat_kebisingan','id_tingkat_kebisingan');
	}
	public function Desa()
	{
		return $this->belongsTo('App\Model\DaftarDesa\ProfilDesa','id_desa','id_desa');
	}
}
