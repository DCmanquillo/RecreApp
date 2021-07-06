<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Actividad;

class HomeController extends Controller
{
    public function index(){

        $datosActividad = Actividad::latest()
        ->take(3)
        ->get();
        return view ('admin.index', compact('datosActividad'));
    }
}
