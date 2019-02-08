<?php

namespace App\model\Referensi;

use Illuminate\Database\Eloquent\Model;

class BudidayaIkan extends Model
{
	protected $table = 'referensi.budidaya_ikan';
	protected $primaryKey = 'id_budidaya_ikan';

	public $timestamps =false;


	public function Budidaya()
	{
		return $this->belongsTo('App\Model\Referensi\BudidayaIkan','bud_id_budidaya_ikan','id_budidaya_ikan');
	}

}