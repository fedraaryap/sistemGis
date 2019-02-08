<?php

namespace App\model\Referensi;

use Illuminate\Database\Eloquent\Model;

class StatusKepemilikan extends Model
{
	protected $table = 'referensi.status_kepemilikan';
	protected $primaryKey = 'id_status_kepemilikan';

		public $timestamps =false;
}
