<?php

namespace App\model\Potensi;

use Illuminate\Database\Eloquent\Model;

class PotensiUmum extends Model
{
	protected $table = 'potensi.potensi_umum';
	protected $primaryKey = 'id_umum';
	public $timestamps =false;

	public function ProfilDesa()
	{
		return $this->belongSTo('App\Model\DaftarDesa\ProfilDesa','id_desa','id_desa');
	}


	public function StatusOrbitasi()
	{
		return $this->belongSTo('App\Model\DataInduk\StatusOrbitasi','id_status_orbitasi','id_status_orbitasi');
	}

	public function LuasWilayah()
	{
		return $this->belongSTo('App\Model\DataInduk\LuasWilayah','id_luas_wilayah','id_luas_wilayah');
	}

	public function BatasWilayah()
	{
		return $this->belongSTo('App\Model\DataInduk\BatasWilayah','id_batas_wilayah','id_batas_wilayah');
	}
}
