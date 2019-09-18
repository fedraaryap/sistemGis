<?php

namespace App\Model\DaftarDesa;

use Illuminate\Database\Eloquent\Model;

class ProfilDesa extends Model
{
	
    protected $table = 'data_desa.profil_desa';
   	protected $primaryKey = 'id_desa';
   
	public $timestamps =false;
	
	public function Wilayah()
	{
		return $this->belongsTo('App\Model\DataInduk\Wilayah','id_wilayah','id_wilayah');
	}
	public function PerangkatDesa()
	{
		return $this->belongsTo('App\Model\DataInduk\PerangkatDesa','id_perangkat_desa','id_perangkat_desa');
	}

	public function Tahun()
	{
		return $this->belongsTo('App\Model\DataInduk\Tahun','id_tahun','id_tahun');
	}
	
	
	
}
