<?php

namespace App\Model\Referensi;

use Illuminate\Database\Eloquent\Model;

class Taman extends Model
{
	protected $table = 'referensi.taman';
	protected $primaryKey = 'id_taman';

	public $timestamps =false;
}
