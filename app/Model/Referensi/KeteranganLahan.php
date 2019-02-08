<?php

namespace App\Model\Referensi;

use Illuminate\Database\Eloquent\Model;

class KeteranganLahan extends Model
{
     protected $table = 'referensi.keterangan_lahan';
    protected $primaryKey = 'id_ket_lahan';

    public $timestamps =false;
}
