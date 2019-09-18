<?php

namespace App\model\Potensi;

use Illuminate\Database\Eloquent\Model;

class PrasaranaSarana extends Model
{
	protected $table = 'potensi.prasarana_sarana';
	protected $primaryKey = 'id_prasasa';

	public $timestamps =false;

	public function ProfilDesa()
	{
		return $this->belongSTo('App\Model\DaftarDesa\ProfilDesa','id_desa','id_desa');
	}


	public function StatusPrasarana()
	{
		return $this->belongSTo('App\Model\DataInduk\StatusPrasarana','id_status_prasarana','id_status_prasarana');
	}

	public function StatPrasaranaLainnya()
	{
		return $this->belongSTo('App\Model\DataInduk\StatPrasaranaLainnya','id_stat_prasarana','id_stat_prasarana');
	}

	public function StatusSaranaTransportasi()
	{
		return $this->belongSTo('App\Model\DataInduk\StatusSaranaTransportasi','id_status_transportasi','id_status_transportasi');
	}
}
