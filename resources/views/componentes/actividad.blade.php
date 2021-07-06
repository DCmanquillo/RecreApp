@extends('layouts.plantilla')

@section('contenido-principal')

<link href="{{ asset('css/acti.css') }}" rel="stylesheet">

<div class="container-fluid">

    <div class="row">
        @foreach ($datosActividad as $actividad)
            <div class="col-sm-12 col-md-4 col-lg-3 p-2">
                <div class="card">
                    <div class="card-header">
                        <h1>{{$actividad->nombactividad}}</h1>
                    </div>

                    <div class="card-body">
                        <img src="storage/{{$actividad->image}}" alt="">
                    </div>

                    <div class="card-footer">
                        <p>{{$actividad->observacion}}</p>
                    </div>


                    <button type="button" class="btn btn-info btn-block "
                    style="background-color: #0B1054; color: aliceblue;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Ver Mas<!doctype html>
                    </button>
                </div>
            </div>
        @endforeach
    </div>
</div> <br><br>


@endsection
