<?php

namespace App\Http\Controllers\PotensiDesa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SarprasPemerintahanController extends Controller
{
    public function SarprasPemerintahan()
    {
    	return view('SarprasPemerintahan.SarprasPemerintahan');
    }
}
