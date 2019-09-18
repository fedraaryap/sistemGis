<?php

namespace App\Model\public;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    protected $table = 'public.indo_kab_kot';
	protected $primaryKey = 'gid';

	public $timestamps =false;
}
