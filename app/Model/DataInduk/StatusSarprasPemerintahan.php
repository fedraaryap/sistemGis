<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class StatusSarprasPemerintahan extends Model
{
	protected $table = 'data_induk.status_sarpras_pemerintahan';
	protected $primaryKey = 'id_status_sarpras';

	public $timestamps =false;

	public function SarprasPemerintahan()
	{
		return $this->belongsTo('App\Model\Referensi\SarprasPemerintahan','id_sarpas_pemeritahan','id_sarpas_pemeritahan');
	}

	public function SatuanPrasarana()
	{
		return $this->belongsTo('App\Model\Referensi\SatuanPrasarana','id_satuan_prasarana','id_satuan_prasarana');
	}
	public function Desa()
	{
		return $this->belongsTo('App\Model\DaftarDesa\ProfilDesa','id_desa','id_desa');
	}

}
