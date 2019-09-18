<?php

namespace App\Model\public;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
      protected $table = 'public.kecamatan';
	protected $primaryKey = 'gid';

	public $timestamps =false;
}
