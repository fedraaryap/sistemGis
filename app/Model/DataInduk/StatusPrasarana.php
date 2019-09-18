<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class StatusPrasarana extends Model
{
	protected $table = 'data_induk.status_prasarana';
	protected $primaryKey = 'id_status_prasarana';

	public $timestamps =false;

	public function JenisPrasarana(){
	return $this->belongsTo('App\Model\Referensi\JenisPrasaranaSarana','id_jenis_prasarana','id_jenis_prasarana');
	}

	public function SatuanPrasarana(){
	return $this->belongsTo('App\Model\Referensi\SatuanPrasarana','id_satuan_prasarana','id_satuan_prasarana');
	}

	public function Desa()
	{
		return $this->belongsTo('App\Model\DaftarDesa\ProfilDesa','id_desa','id_desa');
	}
}
