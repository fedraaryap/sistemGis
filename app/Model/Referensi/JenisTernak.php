<?php

namespace App\Model\Referensi;

use Illuminate\Database\Eloquent\Model;

class JenisTernak extends Model
{
	protected $table = 'referensi.jenis_ternak';
	protected $primaryKey = 'id_jenis_ternak';
	public $timestamps =false;
}
