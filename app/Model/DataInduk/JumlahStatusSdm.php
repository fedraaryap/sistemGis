<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class JumlahStatusSdm extends Model
{
	protected $table = 'data_induk.jumlah_status_sdm';
	protected $primaryKey = 'id_jumlah_sdm';

	public $timestamps =false;


	public function JumlahStatus()
	{
		return $this->belongsTo('App\Model\Referensi\StatusJumlah','id_status','id_status');
	}
}
