<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class misionController extends Controller
{
    public function index()
    {
        return view('componentes.mision');
    }
}
