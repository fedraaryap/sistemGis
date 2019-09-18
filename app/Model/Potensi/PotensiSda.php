<?php

namespace App\model\Potensi;

use Illuminate\Database\Eloquent\Model;

class PotensiSda extends Model
{
	protected $table = 'potensi.potensi_sda';
	protected $primaryKey = 'id_sda';
	public $timestamps =false;

	public function ProfilDesa()
	{
		return $this->belongSTo('App\Model\DaftarDesa\ProfilDesa','id_desa','id_desa');
	}


	public function StatusSumberAir()
	{
		return $this->belongSTo('App\Model\DataInduk\StatusSumberAir','id_status_sumber','id_status_sumber');
	}

	public function PotensiAir()
	{
		return $this->belongSTo('App\Model\DataInduk\PotensiAir','id_potensi_air','id_potensi_air');
	}

	public function StatusAir()
	{
		return $this->belongSTo('App\Model\DataInduk\StatusAir','id_status_air','id_status_air');

	}

		public function BahanGalian()
	{
		return $this->belongSTo('App\Model\DataInduk\BahanGalian','id_galian','id_galian');
	}
}
