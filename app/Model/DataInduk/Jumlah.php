<?php

namespace App\model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class Jumlah extends Model
{
	protected $table = 'data_induk.jumlah';
	protected $primaryKey = 'id_jumlah';

	public function Desa()
	{
		return $this->belongsTo('App\Model\DaftarDesa\ProfilDesa','id_desa','id_desa');
	}

}
