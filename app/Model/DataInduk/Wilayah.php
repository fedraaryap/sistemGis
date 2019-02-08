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
		return $this->belongsTo('App\Model\Referensi\LvNamaWilayah','id-lv_wilayah','id_level_wilayah');
	}
}
