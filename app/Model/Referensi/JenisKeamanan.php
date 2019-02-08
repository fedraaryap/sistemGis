<?php

namespace App\Model\Referensi;

use Illuminate\Database\Eloquent\Model;

class JenisKeamanan extends Model
{
	protected $table = 'referensi.jenis_keamanan';
	protected $primaryKey = 'id_jenis_keamanan';

	public $timestamps =false;
}
