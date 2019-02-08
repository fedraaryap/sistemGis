<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class TenagaKerja extends Model
{
	protected $table = 'data_induk.tenaga_kerja';
	protected $primaryKey = 'id_tenaga_kerja';

	public $timestamps =false;

}
