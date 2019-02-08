<?php

namespace App\Http\Controllers\PotensiDesa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SdmController extends Controller
{
    public function sdm()
    {
    	return view('Sdm.sdm');
    }
}
