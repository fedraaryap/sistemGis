<?php

namespace App\model\Potensi;

use Illuminate\Database\Eloquent\Model;

class PotensiKelembagaan extends Model
{
	protected $table = 'potensi.potensi_kelembagaan';
	protected $primaryKey = 'id_kelembagaan';

	public $timestamps =false;

	public function Lempendidikan()
	{
		return $this->belongSTo('App\Model\DataInduk\LembagaPendidikan','id_pendidikan','id_pendidikan');
	}

}
