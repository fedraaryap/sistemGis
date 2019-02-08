<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class KualitasUdara extends Model
{
	protected $table = 'data_induk.kualitas_udara';
	protected $primaryKey = 'id_kualitas';

	public $timestamps =false;


	public function SumberKualitas()
	{
		return $this->belongsTo('App\Model\Referensi\SumberPencemaran','id_sumber','id_sumber');
	}
}
