<?php

namespace App\Model\Referensi;

use Illuminate\Database\Eloquent\Model;

class JenisProduktifitas extends Model
{
	protected $table = 'referensi.jenis_produktifitas';
	protected $primaryKey = 'id_jenis_produktifitas';
	public $timestamps =false;

	public function Pemasaran()
	{
		return $this->belongsTO('App\Model\Referensi\MekanismePemasaran','id_pemasaran','id_pemasaran');
	}
}
