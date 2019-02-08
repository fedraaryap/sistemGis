<?php

namespace App\Model\Referensi;

use Illuminate\Database\Eloquent\Model;

class SumberPencemaran extends Model
{
	protected $table = 'referensi.sumber_pencemaran';
	protected $primaryKey = 'id_sumber';

	public $timestamps =false;
}
