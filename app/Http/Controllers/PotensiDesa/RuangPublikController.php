<?php

namespace App\Http\Controllers\PotensiDesa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RuangPublikController extends Controller
{
    public function RuangPublik()
    {
    	return view('RuangPublik.RuangPublik');
    }
}
