<?php

namespace App\model\Potensi;

use Illuminate\Database\Eloquent\Model;

class PotensiSdm extends Model
{
	protected $table = 'potensi.potensi_sdm';
	protected $primaryKey = 'id_sdm';
	public $timestamps =false;

	public function ProfilDesa()
	{
		return $this->belongSTo('App\Model\DaftarDesa\ProfilDesa','id_desa','id_desa');
	}


	public function TenagaKerja()
	{
		return $this->belongSTo('App\Model\DataInduk\TenagaKerja','id_tenaga_kerja','id_tenaga_kerja');
	}

	public function JumlahSdmDesa()
	{
		return $this->belongSTo('App\Model\DataInduk\JumlahSdmDesa','id_jumlah_sdm','id_jumlah_sdm');
	}

	public function JumlahSdmPendidikan()
	{
		return $this->belongSTo('App\Model\DataInduk\JumlahSdmPendidikan','id_sdm_pendidikan','id_sdm_pendidikan');

	}

		public function JumlahStatusSdm()
	{
		return $this->belongSTo('App\Model\DataInduk\JumlahStatusSdm','id_jumlah_status','id_jumlah_status');
	}

		public function JumlahUsiaSdm()
	{
		return $this->belongSTo('App\Model\DataInduk\JumlahUsiaSdm','id_usia_sdm','id_usia_sdm');
	}

		public function KualitasAngkatan()
	{
		return $this->belongSTo('App\Model\DataInduk\KualitasAngkatan','id_angkatan','id_angkatan');
	}
}
