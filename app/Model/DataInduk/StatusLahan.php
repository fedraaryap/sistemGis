<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class StatusLahan extends Model
{
	protected $table = 'data_induk.status_lahan';
	protected $primaryKey = 'id_status_lahan';

	public $timestamps =false;

	public function Taman()
	{
		return $this->belongsTo('App\Model\Referensi\Taman','id_taman','id_taman');
	}

	public function Wisata()
	{
		return $this->belongsTo('App\Model\Referensi\PotensiWisata','id_wisata','id_wisata');
	}
}
