<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class StatusJasaUsaha extends Model
{
    protected $table = 'data_induk.status_jasa_usaha';
    protected $primaryKey = 'id_stat_jasa_usaha';

	public $timestamps =false;

	public function JasaUsaha()
	{
		return $this->belongsTo('App\Model\Referensi\EkonomiJasaUsaha','id_jasa_usaha','id_jasa_usaha');
	}
	public function Desa()
	{
		return $this->belongsTo('App\Model\DaftarDesa\ProfilDesa','id_desa','id_desa');
	}
}
