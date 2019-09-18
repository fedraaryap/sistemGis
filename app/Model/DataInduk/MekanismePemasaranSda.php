<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class MekanismePemasaranSda extends Model
{
	protected $table = 'data_induk.mekanisme_pemasaran_sda';
	protected $primaryKey = 'id_pemasaran_sda';

	public $timestamps =false;

	public function Desa()
	{
		return $this->belongsTo('App\Model\DaftarDesa\ProfilDesa','id_desa','id_desa');
	}

}
