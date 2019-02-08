<?php

namespace App\model\Referensi;

use Illuminate\Database\Eloquent\Model;

class SumberAir extends Model
{
	protected $table = 'referensi.sumber_air';
	protected $primaryKey = 'id_sumber_air';

	public $timestamps =false;

	public function air()
	{
		return $this->belongsTo('App\Model\Referensi\SumberAir','sum_id_sumber_air','id_sumber_air');
	}
}
