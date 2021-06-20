@extends('adminlte::page')

@section('title', 'RecreAdultos')

@section('content_header')
    <h1 class="text-center">Actualizar Lugar</h1> <br>

    <form method="POST" action="{{route('lugar.update', $lugar)}}"  class="needs-validation" novalidate>
        @method('PUT')
        @csrf


    <div class="container justify-content-center">
        <div class="row">
            <div class="form-group col-sm-12 col-md-6 col-lg-6">

                <label  class="form-label" for="text">Nombre lugar</label>
                <input id="nombre lugar" name="nombre lugar" placeholder="Nombre lugar" type="text" required class="form-control" value="{{$lugar->nombre_lugar}}">

            </div>

            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label  class="form-label" for="text">latitud</label>
                <input id="latitud" name="latitud" placeholder="latitud" type="text" required class="form-control" value="{{$lugar->latitud}}">
            </div>

        </div>

        <div class="row">

            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                 <label  class="form-label" for="text">longitud</label>
                 <input id="longitud" name="longitud" placeholder="longitud" type="text" required class="form-control" value="{{$lugar->longitud}}">
            </div>

        </div>

    </div>

    <br>

    <div class="d-flex justify-content-center">
                <button wire:click="store"  class=" btn btn-primary">Actualizar Lugar</button>
            </div>

    </div>

    </div>

@stop


@section('content')
  {{-- traigo el componente de livewire --}}

@stop

@section('css')
    @livewireStyles
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    @livewireScripts
    <script> console.log('Hi!'); </script>
@stop
