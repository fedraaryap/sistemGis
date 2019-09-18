<?php

namespace App\Model\public;

use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    protected $table = 'public.desaindonesia';
	protected $primaryKey = 'gid';

	public $timestamps =false;
}
