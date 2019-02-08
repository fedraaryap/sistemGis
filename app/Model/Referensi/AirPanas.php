<?php

namespace App\Model\Referensi;

use Illuminate\Database\Eloquent\Model;

class AirPanas extends Model
{
	protected $table = 'referensi.air_panas';
	protected $primaryKey = 'id_air_panas';
	public $timestamps =false;

	public function Kepemilikan()
	{
		return $this->belongsTo('App\Model\Referensi\StatusKepemilikan','id_status_kepemilikan','id_status_kepemilikan');
	}
}
