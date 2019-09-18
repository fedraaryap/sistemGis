<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class JumlahProduksi extends Model
{
	protected $table = 'data_induk.jumlah_produksi';
	protected $primaryKey = 'id_jumlah_produksi';

	public $timestamps =false;


	public function Produksi()
	{
		return $this->belongsTo('App\Model\Referensi\Produksi','id_produksi','id_produksi');
	}
	public function Desa()
	{
		return $this->belongsTo('App\Model\DaftarDesa\ProfilDesa','id_desa','id_desa');
	}
}
