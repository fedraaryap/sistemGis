<?php

namespace App\Http\Controllers\PotensiDesa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PertanianController extends Controller
{
    public function pertanian()
    {
    	return view('Pertanian.pertanian');
    }
}
