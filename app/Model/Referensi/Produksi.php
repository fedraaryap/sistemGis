<?php

namespace App\model\Referensi;

use Illuminate\Database\Eloquent\Model;

class Produksi extends Model
{
	protected $table = 'referensi.produksi';
	protected $primaryKey = 'id_produksi';

	public $timestamps =false;

	public function produk(){
	return $this->belongsTo('App\Model\Referensi\Produksi','pro_id_produksi','id_produksi');
	}
}
