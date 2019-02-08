<?php

namespace App\Model\Referensi;

use Illuminate\Database\Eloquent\Model;

class PartaiPolitik extends Model
{
	protected $table = 'referensi.partai_politik';
	protected $primaryKey = 'id_partai';

	public $timestamps =false;
}
