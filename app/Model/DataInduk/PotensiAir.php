<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class PotensiAir extends Model
{
	protected $table = 'data_induk.potensi_air';
	protected $primaryKey = 'id_potensi_air';

	public $timestamps =false;
}
