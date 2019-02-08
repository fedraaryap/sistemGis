<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class LembagaKeamanan extends Model
{
	protected $table = 'data_induk.lembaga_keamanan';
	protected $primaryKey = 'id_keamanan';

	public $timestamps =false;

	public function JenisKeamanan()
	{
		return $this->belongsTo('App\Model\Referensi\JenisKeamanan','id_jenis_keamanan','id_jenis_keamanan');
	}
}
