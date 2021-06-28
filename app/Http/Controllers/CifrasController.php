<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CifrasController extends Controller
{
    public function index()
    {
        return view('componentes.cifras');
    }
}
