<?php

namespace App\Http\Controllers\PotensiDesa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LembagaEkonomiController extends Controller
{
    public function ekonomi()
    {
    	return view('LembagaEkonomi.LembagaEkonomi');
    }
}
