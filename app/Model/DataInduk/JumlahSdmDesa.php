<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class JumlahSdmDesa extends Model
{
    protected $table = 'data_induk.jumlah_sdm_desa';
    protected $primaryKey = 'id_jumlah_sdm';

    public $timestamps =false;


	public function SdmDesa()
	{
		return $this->belongsTo('App\Model\Referensi\SdmDesa','id_sdm_desa','id_sdm_desa');
	}
	public function Desa()
	{
		return $this->belongsTo('App\Model\DaftarDesa\ProfilDesa','id_desa','id_desa');
	}
}
