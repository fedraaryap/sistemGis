<?php

namespace App\Model\Referensi;

use Illuminate\Database\Eloquent\Model;

class PotensiWisata extends Model
{
	protected $table = 'referensi.potensi_wisata';
	protected $primaryKey = 'id_wisata';

	public $timestamps =false;
}
