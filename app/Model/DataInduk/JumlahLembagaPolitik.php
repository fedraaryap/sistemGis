<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class JumlahLembagaPolitik extends Model
{
	protected $table = 'data_induk.jumlah_lembaga_politik';
	protected $primaryKey = 'id_jumlah_lembaga';

	public $timestamps =false;


	public function Partai()
	{
		return $this->belongsTo('App\Model\Referensi\PartaiPolitik','id_partai','id_partai');
	}
	public function Desa()
	{
		return $this->belongsTo('App\Model\DaftarDesa\ProfilDesa','id_desa','id_desa');
	}
}
