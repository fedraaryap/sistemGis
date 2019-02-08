<?php

namespace App\model\Referensi;

use Illuminate\Database\Eloquent\Model;

class Orbitasi extends Model
{
	protected $table = 'referensi.orbitasi';
	protected $primaryKey = 'id_orbitasi';

	public $timestamps =false;

	public function Orbitas()
	{
		return $this->belongsTO('App\Model\Referensi\Orbitasi','orb_id_orbitasi','id_orbitasi');
	}
}
