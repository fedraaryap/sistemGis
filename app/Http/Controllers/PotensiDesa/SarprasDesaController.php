<?php

namespace App\Http\Controllers\PotensiDesa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SarprasDesaController extends Controller
{
    public function SarprasDesa()
    {
    	return view('SarprasDesa.SarprasDesa');
    }
}
