<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;

use App\Models\Beneficiario;

class ActividadController extends Controller
{
    public function index()
    {
        // $datosActividad = Actividad::latest()
        // ->take(3)
        // ->get();
        $datosActividad = Actividad::all();
        return view('componentes.actividad', compact('datosActividad'));
    }
}
