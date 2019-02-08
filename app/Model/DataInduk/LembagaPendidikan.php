<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class LembagaPendidikan extends Model
{
	protected $table = 'data_induk.lembaga_pendidikan';
	protected $primaryKey = 'id_pendidikan';

	public $timestamps =false;

	public function Sekolah()
	{
		return $this->belongsTo('App\Model\Referensi\NamaSekolah','id_sekolah','id_sekolah');
	}

}
