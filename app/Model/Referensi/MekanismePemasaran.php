<?php

namespace App\Model\Referensi;

use Illuminate\Database\Eloquent\Model;

class MekanismePemasaran extends Model
{
	protected $table = 'referensi.mekanisme_pemasaran';
	protected $primaryKey = 'id_pemasaran';

	public $timestamps =false;
}
