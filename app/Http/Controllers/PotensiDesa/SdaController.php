<?php

namespace App\Http\Controllers\PotensiDesa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SdaController extends Controller
{
    public function sda()
    {
    	return view('Sda.sda');
    }
}
