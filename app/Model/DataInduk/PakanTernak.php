<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class PakanTernak extends Model
{
	protected $table = 'data_induk.pakan_ternak';
	protected $primaryKey = 'id_pakan_ternak';

	public $timestamps =false;

	public function Kepemilikan()
	{
		return $this->belongsTo('App\Model\Referensi\StatusKepemilikan','id_status_kepemilikan','id_status_kepemilikan');
	}
}
