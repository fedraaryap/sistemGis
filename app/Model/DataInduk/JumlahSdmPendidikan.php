<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class JumlahSdmPendidikan extends Model
{
    protected $table = 'data_induk.jumlah_sdm_pendidikan';
    protected $primaryKey = 'id_sdm_pendidikan';

    public $timestamps =false;


	public function StatusPendidikan()
	{
		return $this->belongsTo('App\Model\Referensi\StatusPendidikan','id_status_pendidikan','id_status_pendidikan');
	}
}
