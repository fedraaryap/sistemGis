<?php

namespace App\model\Potensi;

use Illuminate\Database\Eloquent\Model;

class PotensiPertanian extends Model
{
	protected $table = 'potensi.potensi_pertanian';
	protected $primaryKey = 'id_pertanian';

	public $timestamps =false;

	public function ProfilDesa()
	{
		return $this->belongSTo('App\Model\DaftarDesa\ProfilDesa','id_desa','id_desa');
	}


	public function LuasLahan()
	{
		return $this->belongSTo('App\Model\DataInduk\LuasLahan','id_luas_lahan','id_luas_lahan');
	}

	public function JumlahPemilikLahan()
	{
		return $this->belongSTo('App\Model\DataInduk\JumlahPemilikLahan','id_pemilik','id_pemilik');
	}

	public function ProduktifitasPertanian()
	{
		return $this->belongSTo('App\Model\DataInduk\ProduktifitasPertanian','id_produktifitas','id_produktifitas');

	}

		public function Hutan()
	{
		return $this->belongSTo('App\Model\DataInduk\Hutan','id_hutan','id_hutan');
	}
}
