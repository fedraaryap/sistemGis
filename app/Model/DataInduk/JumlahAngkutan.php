<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class JumlahAngkutan extends Model
{
	protected $table = 'data_induk.jumlah_angkutan';
	protected $primaryKey = 'id_pengangkutan';

	public $timestamps =false;


	public function JenisAngkutan()
	{
		return $this->belongsTo('App\Model\Referensi\JenisAngkutan','id_jenis_angkutan','id_jenis_angkutan');
	}
}
