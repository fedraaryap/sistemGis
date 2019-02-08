<?php

namespace App\Model\Referensi;

use Illuminate\Database\Eloquent\Model;

class Batas extends Model
{
	protected $table = 'referensi.batas';
	protected $primaryKey = 'id_batas';
	public $timestamps =false;
}
