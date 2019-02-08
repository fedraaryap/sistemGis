<?php

namespace App\Model\Referensi;

use Illuminate\Database\Eloquent\Model;

class TingkatKebisingan extends Model
{
	protected $table = 'referensi.tingkat_kebisingan';
	protected $primaryKey = 'id_tingkat_kebisingan';
	public $timestamps =false;
}
