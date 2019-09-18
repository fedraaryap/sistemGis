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

	public function Desa()
	{
		return $this->belongsTo('App\Model\Potensi\PotensiPerternakan','id_jumlah_budidaya','id_jumlah_budidaya');
	}

	public function Desa()
	{
		return $this->belongsTo('App\Model\DaftarDesa\ProfilDesa','id_desa','id_desa');
	}
}
