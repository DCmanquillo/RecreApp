@extends('layouts.plantilla')

@section('contenido-principal')

<link href="{{ asset('css/acti.css') }}" rel="stylesheet">
<div class="container-fluid">
    <div class="row">
        @foreach ($datosActividad as $actividad)
            <div class="col-sm-12 col-md-4 col-lg-4">
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
                        Registrar Actividad<!doctype html>
                    </button>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection


 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Actividad</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <input id="nombactividad" type="nombre actividad" name="nombactividad" placeholder="Nombre Actividad" type="text" required class="form-control" value="{{$actividad->nombactividad}}"  wire:model="nombactividad">
        </div>
        <div class="modal-body">
            <input id="fecha inicio" name="fecha inicio" placeholder="fecha inicio" type="text" required class="form-control" value="{{$actividad->fecha_inicio}}" wire:model="fecha_inicio">
        </div>
        <div class="modal-body">
            <input id="hora inicio" name="hora inicio" placeholder="hora inicio" type="text" required class="form-control" value="{{$actividad->hora_inicio}}" wire:model="hora_inicio">
        </div>

        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <a href="{{ route('Beneficiario.index') }}" class="btn btn-info btn-block"class="text-end">Guardar</a>
        </div>
    </div>
    </div>
</div>

