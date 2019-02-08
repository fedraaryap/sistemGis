<?php

namespace App\Model\Referensi;

use Illuminate\Database\Eloquent\Model;

class KondisiHutan extends Model
{
	protected $table = 'referensi.kondisi_hutan';
	protected $primaryKey = 'id_kondisi';

	public $timestamps =false;
}
