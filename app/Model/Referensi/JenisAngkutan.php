<?php

namespace App\model\Referensi;

use Illuminate\Database\Eloquent\Model;

class JenisAngkutan extends Model
{
	protected $table = 'referensi.jenis_angkutan';
	protected $primaryKey = 'id_jenis_angkutan';

	public $timestamps =false;

	public function Angkutan()
	{
		return $this->belongsTo('App\Model\Referensi\JenisAngkutan','jen_id_jenis_angkutan','id_jenis_angkutan');
	}
}
