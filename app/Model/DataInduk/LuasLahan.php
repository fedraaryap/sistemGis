<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class LuasLahan extends Model
{
    protected $table = 'data_induk.luas_lahan';
    protected $primaryKey = 'id_luas_lahan';

    public $timestamps =false;


	public function KetLahan()
	{
		return $this->belongsTo('App\Model\Referensi\KeteranganLahan','id_ket_lahan','id_ket_lahan');
	}
	public function Desa()
	{
		return $this->belongsTo('App\Model\DaftarDesa\ProfilDesa','id_desa','id_desa');
	}
	
}
