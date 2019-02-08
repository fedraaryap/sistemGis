<?php

namespace App\Model\Referensi;

use Illuminate\Database\Eloquent\Model;

class NamaSekolah extends Model
{
	protected $table = 'referensi.nama_sekolah';
	protected $primaryKey = 'id_sekolah';

	public $timestamps =false;

	public function JenisPendidikan()
	{
		return $this->belongsTo('App\Model\Referensi\JenisPendidikan','id_jenis_pendidikan','id_jenis_pendidikan');
	}
}
