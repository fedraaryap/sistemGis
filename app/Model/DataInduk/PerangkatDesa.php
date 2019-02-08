<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class PerangkatDesa extends Model
{
	protected $table = 'data_induk.perangkat_desa';
	protected $primaryKey = 'id_perangkat_desa';
	public $timestamps =false;
}
