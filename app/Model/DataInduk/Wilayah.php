<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
	protected $table = 'data_induk.wilayah';
	protected $primaryKey = 'id_wilayah';

	public $timestamps =false;

	public function LvWil()
	{
		return $this->belongsTo('App\Model\Referensi\LvNamaWilayah','id_lv_wil','id_lv_wil');
	}

		public function Wilayah()
	{
		return $this->belongsTo('App\Model\Referensi\LvNamaWilayah','wil_id_wilayah','id_lv_wil');
	}
}
