<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class StatPrasaranaLainnya extends Model
{
	protected $table = 'data_induk.stat_prasarana_lainnya';
	protected $primaryKey = 'id_stat_prasarana';

	public $timestamps =false;

	public function Prasarana()
	{
		return $this->belongsTo('App\Model\Referensi\PrasaranaLainnya','id_prasarana_sarana','id_prasarana_sarana');
	}

	public function SatuanPrasarana()
	{
		return $this->belongsTo('App\Model\Referensi\SatuanPrasarana','id_satuan_prasarana','id_satuan_prasarana');
	}
}
