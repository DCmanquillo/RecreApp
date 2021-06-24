<?php

namespace App\Http\Controllers;
use App\Models\Actividad;
use App\Models\lugar;
use Illuminate\Http\Request;

class activController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        return view('Activ.listar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Activ.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actividad = Actividad::find($id);
        //$actividad->lugar_id = lugar::all();
        $lugares = lugar::all();

        return view('Activ.edit', compact('actividad','lugares'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $edactividad = Actividad::find($id);
        echo($edactividad->nombactividad);
        echo($request->post('nombactividad'));
        echo($request->post('fecha_inicio'));
        echo($request->post('fecha_cierre'));
        echo($request->post('hora_inicio'));
        echo($request->post('hora_finilizacion'));
        echo($request->post('ent_responsable'));
        echo($request->post('lugar_id'));

        $edactividad->nombactividad = $request->post('nombactividad');
        $edactividad->fecha_inicio = $request->post('fecha_inicio');
        $edactividad->fecha_cierre = $request->post('fecha_cierre');
        $edactividad->hora_inicio = $request->post('hora_inicio');
        $edactividad->hora_finalizacion = $request->post('hora_finalizacion');
        $edactividad->ent_responsable = $request->post('ent_responsable');
        $edactividad->lugar_id =$request->post('lugar_id');
        $edactividad->save();
        return redirect()->route('Activ.index')->with('success','Actividad actualizada satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actividad $actividades)
    {
        $actividades->delete();
        return redirect()->route('Activ.index');
    }
}
