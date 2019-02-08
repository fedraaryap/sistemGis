<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class JumlahPemilikLahan extends Model
{
	protected $table = 'data_induk.jumlah_pemilik_lahan';
	protected $primaryKey = 'id_pemilik';

	public $timestamps =false;


	public function RangeLahan()
	{
		return $this->belongsTo('App\Model\Referensi\RangeLahan','id_range_lahan','id_range_lahan');
	}
}
