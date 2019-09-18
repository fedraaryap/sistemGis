<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class StatusOrbitasi extends Model
{
	protected $table = 'data_induk.status_orbitasi';
	protected $primaryKey = 'id_status_orbitasi';

	public $timestamps =false;

	public function Orbitasi()
	{
		return $this->belongsTo('App\Model\Referensi\Orbitasi','id_orbitasi','id_orbitasi');
	}

	public function SatuanOrbitasi()
	{
		return $this->belongsTo('App\Model\Referensi\SatuanOrbitasi','id_satuan_orbitasi','id_satuan_orbitasi');
	}
	public function Desa()
	{
		return $this->belongsTo('App\Model\DaftarDesa\ProfilDesa','id_desa','id_desa');
	}
}
