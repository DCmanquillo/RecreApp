@extends('adminlte::page')

@section('title', 'RecreAdultos')

@section('content_header')
    <h1 class="text-center">Actualizar Instructor</h1> <br>

    <form method="POST" action="{{route('Instructor.update', $instructor)}}"  class="needs-validation" novalidate>
        @method('PUT')
        @csrf


    <div class="container justify-content-center">
        <div class="row">
            <div class="form-group col-sm-12 col-md-6 col-lg-6">

                <label  class="form-label" for="text">Profesión</label>
                <input id="profesion" name="profesion" placeholder="profesion" type="text" required class="form-control" value="{{$instructor->profesion}}">

            </div>

            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label  class="form-label" for="text">Estado</label>
                <input id="estado" name="estado" placeholder="estado" type="text" required class="form-control" value="{{$instructor->estado}}">
            </div>

        </div>

        <div class="row">

            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                 <label  class="form-label" for="text">registro</label>
                 <input id="registro" name="registro" placeholder="registro" type="text" required class="form-control" value="{{$instructor->registro}}">
            </div>

            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label  class="form-label" for="text">Disponibilidad</label>
                <input id="disponibilidad" name="disponibilidad" placeholder="disponibilidad" type="text" required class="form-control" value="{{$instructor->disponibilidad}}">
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
