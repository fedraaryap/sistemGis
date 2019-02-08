<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class JumlahOrang extends Model
{
	protected $table = 'data_induk.jumlah_orang';
	protected $primaryKey = 'id_jumlah_orang';

	public $timestamps =false;


	public function LembagaEkonomi()
	{
		return $this->belongsTo('App\Model\Referensi\LembagaEkonomi','id_lembaga_ekonomi','id_lembaga_ekonomi');
	}
}
