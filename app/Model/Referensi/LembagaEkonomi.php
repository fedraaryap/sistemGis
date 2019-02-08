<?php

namespace App\Model\Referensi;

use Illuminate\Database\Eloquent\Model;

class LembagaEkonomi extends Model
{
	protected $table = 'referensi.lembaga_ekonomi';
	protected $primaryKey = 'id_lembaga_ekonomi';
	public $timestamps =false;

	public function indukekonomi(){
	return $this->belongsTo('App\Model\Referensi\LembagaEkonomi','lem_id_lembaga_ekonomi','id_lembaga_ekonomi');
	}
}
