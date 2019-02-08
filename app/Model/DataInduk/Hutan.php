<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class Hutan extends Model
{
	protected $table = 'data_induk.hutan';
	protected $primaryKey = 'id_hutan';

	public $timestamps =false;


	public function kondisi()
	{
		return $this->belongsTo('App\Model\Referensi\KondisiHutan','id_kondisi','id_kondisi');
	}

	public function Dampak()
	{
		return $this->belongsTo('App\Model\Referensi\DampakPengolahanHutan','id_dampak','id_dampak');
	}
}
