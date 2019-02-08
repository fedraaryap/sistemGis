<?php

namespace App\Model\Referensi;

use Illuminate\Database\Eloquent\Model;

class EkonomiJasaUsaha extends Model
{
    protected $table = 'referensi.ekonomi_jasa_usaha';
	protected $primaryKey = 'id_jasa_usaha';

	public $timestamps =false;

	public function jasa()
	{
		return $this->belongsTO('App\Model\Referensi\EkonomiJasaUsaha','eko_id_jasa_usaha','id_jasa_usaha');
	}

}
