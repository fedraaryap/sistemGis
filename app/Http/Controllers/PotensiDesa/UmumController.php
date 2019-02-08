<?php

namespace App\Http\Controllers\PotensiDesa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UmumController extends Controller
{
    public function umum()
    {
    	return view('Umum.umum');
    }
}
