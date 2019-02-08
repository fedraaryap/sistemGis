<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class JumlahBudidayaIkan extends Model
{
	protected $table = 'data_induk.jumlah_budidaya_ikan';
	protected $primaryKey = 'id_jumlah_budidaya';

	public $timestamps =false;


	public function BudidayaIkan()
	{
		return $this->belongsTo('App\Model\Referensi\BudidayaIkan','id_budidaya_ikan','id_budidaya_ikan');
	}
}
