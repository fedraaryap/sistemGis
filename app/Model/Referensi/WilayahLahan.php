<?php

namespace App\Model\Referensi;

use Illuminate\Database\Eloquent\Model;

class WilayahLahan extends Model
{
	protected $table = 'referensi.wilayah_lahan';
	protected $primaryKey = 'id_wilayah_lahan';

	public $timestamps =false;

	public function indukwilayah(){
		return $this->belongsTo('App\Model\Referensi\WilayahLahan','wil_id_wilayah_lahan','id_wilayah_lahan');
	}
}
