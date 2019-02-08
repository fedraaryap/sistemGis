<?php

namespace App\Model\Referensi;

use Illuminate\Database\Eloquent\Model;

class JenisPendidikan extends Model
{
	protected $table = 'referensi.jenis_pendidikan';
	protected $primaryKey = 'id_jenis_pendidikan';

	public $timestamps =false;
}
