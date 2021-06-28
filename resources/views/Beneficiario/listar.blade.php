@extends('adminlte::page')

@section('title', 'RecreAdultos')

@section('content_header')
    <h1>Mis Actividades</h1>
@stop

@section('content')

<div>
    <div class="card">

        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="buscar por actividad">
        </div>


            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  table-auto  ">
                        <thead class="thead-bg-seccess">
                        <tr>
                            <th>Nombre Actividad</th>
                            <th>Fecha inicio</th>
                            <th>Hora inicio</th>
                            <th>lugar</th>

                            <th>Opciones</th>
                        </thead>
                        <tbody>
                            @foreach ($datosActividad as $actividad)
                            <tr>
                                <td>{{$actividad->nombactividad}}</td>
                                <td>{{$actividad->fecha_inicio}}</td>
                                <td>{{$actividad->hora_inicio}}</td>
                                <td > @foreach ($datosLugar as $lugar)
                                    {{$lugar->nombre_lugar}}</td>
                                    @endforeach
                        @endforeach

@stop

@section('css')
    @livewireStyles
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    @livewireScripts
    {{-- //sweeet alert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script> console.log('Hi!'); </script>
@stop
