<?php

namespace App\model\Referensi;

use Illuminate\Database\Eloquent\Model;

class SarprasPemerintahan extends Model
{
	protected $table = 'referensi.sarpras_pemerintahan';
	protected $primaryKey = 'id_sarpas_pemerintahan';

	public $timestamps =false;

	public function sarpem()
	{
		return $this->belongsTO('App\Model\Referensi\SarprasPemerintahan','sar_id_sarpas_pemerintahan','id_sarpas_pemerintahan');
	}
}
