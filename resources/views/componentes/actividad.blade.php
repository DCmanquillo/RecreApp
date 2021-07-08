@extends('layouts.plantilla')

@section('contenido-principal')

<link href="{{ asset('css/acti.css') }}" rel="stylesheet">

<div class="container-fluid">

    <div class="row">
        @foreach ($datosActividad as $actividad)
            <div class="col-sm-12 col-md-4 col-lg-4 p-3">
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


                    <a href="{{route('Beneficiario.create', $actividad->id)}}"> <button type="button" class="btn btn-info btn-block "
                    style="background-color: #0B1054; color: aliceblue;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                     Ver Mas<!doctype html>
                    </button></a>
                </div>
            </div>
        @endforeach
    </div>
</div> <br><br>


@endsection
