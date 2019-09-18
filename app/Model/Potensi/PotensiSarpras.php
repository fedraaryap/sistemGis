<?php

namespace App\model\Potensi;

use Illuminate\Database\Eloquent\Model;

class PotensiSarpras extends Model
{
	protected $table = 'potensi.potensi_sarpras';
	protected $primaryKey = 'id_sarpras';
		public $timestamps =false;

	public function ProfilDesa()
	{
		return $this->belongSTo('App\Model\DaftarDesa\ProfilDesa','id_desa','id_desa');
	}


	public function StatusSarpras()
	{
		return $this->belongSTo('App\Model\DataInduk\StatusSarprasPemerintahan','id_status_sarpras','id_status_sarpras');
	}
}
