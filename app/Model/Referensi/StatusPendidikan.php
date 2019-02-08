<?php

namespace App\model\Referensi;

use Illuminate\Database\Eloquent\Model;

class StatusPendidikan extends Model
{
	protected $table = 'referensi.status_pendidikan';
	protected $primaryKey = 'id_status_pendidikan';


	public $timestamps =false;

	public function RangeUsia()
	{
		return $this->belongsTo('App\Model\Referensi\RangeUsia','id_range','id_range');
	}
}
