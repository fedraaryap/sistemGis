<?php

namespace App\Http\Controllers\PotensiDesa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PerternakanController extends Controller
{
    public function perternakan()
    {
    	return view('Peternakan.perternakan');
    }
}
