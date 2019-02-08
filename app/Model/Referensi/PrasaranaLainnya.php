<?php

namespace App\model\Referensi;

use Illuminate\Database\Eloquent\Model;

class PrasaranaLainnya extends Model
{
	protected $table = 'referensi.prasarana_lainnya';
	protected $primaryKey = 'id_prasarana_sarana';


	public $timestamps =false;

	public function pralainya(){
	return $this->belongsTo('App\Model\Referensi\PrasaranaLainnya','pra_id_prasarana_sarana','id_prasarana_sarana');
	}
}
