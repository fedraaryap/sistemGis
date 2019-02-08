<?php

namespace App\Model\DataInduk;

use Illuminate\Database\Eloquent\Model;

class Tahun extends Model
{
	protected $table = 'data_induk.tahun';
	protected $primaryKey = 'id_tahun';

	public $timestamps =false;

}
