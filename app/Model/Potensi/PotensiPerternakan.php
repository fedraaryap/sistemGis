<?php

namespace App\model\Potensi;

use Illuminate\Database\Eloquent\Model;

class PotensiPerternakan extends Model
{
	protected $table = 'potensi.potensi_perternakan';
	protected $primaryKey = 'id_perternakan';
	public $timestamps =false;

	public function ProfilDesa()
	{
		return $this->belongSTo('App\Model\DaftarDesa\ProfilDesa','id_desa','id_desa');
	}


	public function MekanismePemasaran()
	{
		return $this->belongSTo('App\Model\DataInduk\MekanismePemasaranSda','id_pemasaran_sda','id_pemasaran_sda');
	}

	public function JumlahBudidayaIkan()
	{
		return $this->belongSTo('App\Model\DataInduk\JumlahBudidayaIkan','id_jumlah_budidaya','id_jumlah_budidaya');
	}

	public function PopulasiTernak()
	{
		return $this->belongSTo('App\Model\DataInduk\PopulasiTernak','id_populasi','id_populasi');

	}

		public function PakanTernak()
	{
		return $this->belongSTo('App\Model\DataInduk\PakanTernak','id_pakan_ternak','id_pakan_ternak');
	}

		public function JumlahProduksi()
	{
		return $this->belongSTo('App\Model\DataInduk\JumlahProduksi','id_jumlah_produksi','id_jumlah_produksi');
	}
}
