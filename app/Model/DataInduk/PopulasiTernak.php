<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class PopulasiTernak extends Model
{
	protected $table = 'data_induk.populasi_ternak';
	protected $primaryKey = 'id_populasi';
	public $timestamps =false;

	public function JenisTernak()
	{
		return $this->belongsTo('App\Model\Referensi\JenisTernak','id_jenis_ternak','id_jenis_ternak');
	}
}
