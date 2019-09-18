<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class StatusSumberAir extends Model
{
	protected $table = 'data_induk.status_sumber_air';
	protected $primaryKey = 'id_status_sumber';

	public $timestamps =false;

	public function SumberAir()
	{
		return $this->belongsTo('App\Model\Referensi\SumberAir','id_sumber_air','id_sumber_air');
	}
	public function Desa()
	{
		return $this->belongsTo('App\Model\DaftarDesa\ProfilDesa','id_desa','id_desa');
	}
}
