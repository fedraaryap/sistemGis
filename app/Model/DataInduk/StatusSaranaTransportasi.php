<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class StatusSaranaTransportasi extends Model
{
	protected $table = 'data_induk.status_sarana_transportasi';
	protected $primaryKey = 'id_status_transportasi';
	public $timestamps =false;

	public function SaranaTransportasi()
	{
	return $this->belongsTo('App\Model\Referensi\SaranaTransportasi','id_sarana_transportasi','id_sarana_transportasi');
	}
}
