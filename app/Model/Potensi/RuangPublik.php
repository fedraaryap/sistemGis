<?php

namespace App\model\Potensi;

use Illuminate\Database\Eloquent\Model;

class RuangPublik extends Model
{
	protected $table = 'potensi.ruang_publik';
	protected $primaryKey = 'id_ruangpublik';
	public $timestamps =false;

	public function ProfilDesa()
	{
		return $this->belongSTo('App\Model\DaftarDesa\ProfilDesa','id_desa','id_desa');
	}


	public function KualitasUdara()
	{
		return $this->belongSTo('App\Model\DataInduk\KualitasUdara','id_kualitas','id_kualitas');
	}

	public function Kebisingan()
	{
		return $this->belongSTo('App\Model\DataInduk\Kebisingan','id_kebisingan','id_kebisingan');
	}
	public function StatusLahan()
	{
		return $this->belongSTo('App\Model\DataInduk\StatusLahan','id_status_lahan','id_status_lahan');
	}
}
