<?php

namespace App\model\referensi;

use Illuminate\Database\Eloquent\Model;

class SaranaTransportasi extends Model
{
	protected $table = 'referensi.sarana_transportasi';
	protected $primaryKey = 'id_sarana_transportasi';

	public $timestamps =false;
}
