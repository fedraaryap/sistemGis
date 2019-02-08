<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class StatusAir extends Model
{
	protected $table = 'data_induk.status_air';
	protected $primaryKey = 'id_status_air';

	public $timestamps =false;

	public function AirBersih()
	{
		return $this->belongsTo('App\Model\Referensi\AirBersih','id_air_bersih','id_air_bersih');
	}

	public function AirPanas()
	{
		return $this->belongsTo('App\Model\Referensi\AirPanas','id_air_panas','id_air_panas');
	}
}
