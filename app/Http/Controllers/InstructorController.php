<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\perfil_instructor;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Instructor.gestionar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Instructor.create');
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
       $instructor = perfil_instructor::find($id);
       return view('Instructor.edit', compact('instructor'));
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
        $edinstructor = perfil_instructor::find($id);
        $edinstructor->profesion = $request->profesion;
        $edinstructor->disponibilidad = $request->disponibilidad;
        $edinstructor->estado= $request->estado;
        $edinstructor->registro= $request->registro;
        $edinstructor->save();
        return redirect()->route('Instructor.index')->with('success','Instructor actualizado satisfactoriamente');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy (perfil_instructor $instructor)
    {
        $instructor->delete();
        return redirect()->route('Instructor.index');
    }
}
