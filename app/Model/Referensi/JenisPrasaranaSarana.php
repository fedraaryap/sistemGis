<?php

namespace App\model\Referensi;

use Illuminate\Database\Eloquent\Model;

class JenisPrasaranaSarana extends Model
{
	protected $table = 'referensi.jenis_prasarana_sarana';
	protected $primaryKey = 'id_jenis_prasarana';

	public $timestamps =false;

	public function Prasarana()
	{
		return $this->belongsTO('App\Model\Referensi\JenisPrasaranaSarana','jen_id_jenis_prasarana','id_jenis_prasarana');
	}
}
