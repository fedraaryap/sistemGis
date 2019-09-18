<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class ProduktifitasPertanian extends Model
{
	protected $table = 'data_induk.produktifitas_pertanian';
	protected $primaryKey = 'id_produktifitas';

	public $timestamps =false;

	public function Produktifitas()
	{
		return $this->belongsTo('App\Model\Referensi\JenisProduktifitas','id_jenis_produktifitas','id_jenis_produktifitas');
	}

	public function Desa()
	{
		return $this->belongsTo('App\Model\DaftarDesa\ProfilDesa','id_desa','id_desa');
	}
}
