@extends('adminlte::page')

@section('title', 'RecreAdultos')

@section('content_header')
    <h1 class="text-center">Actualizar Actividad</h1> <br>



    <form  wire:submit.prevent="save"  method="POST" action="{{route('Activ.update', $actividad )}}"  class="needs-validation" novalidate enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="container justify-content-center">
            <div class="row">
                
                <div class="form-group col-sm-12 col-md-6 col-lg-6">

                 <label  class="form-label" for="text">Nombre Actividad</label>

                    <input id="nombactividad" type="nombre actividad" name="nombactividad" placeholder="Nombre Actividad" type="text" required class="form-control" value="{{$actividad->nombactividad}}"  wire:model="nombactividad">
                    @error('nombactividad') <span class="error">{{ $message }}</span> @enderror
                </div>
            



                <div class="form-group col-sm-12 col-md-6 col-lg-6">
                     <label  class="form-label" for="date">Fecha Cierre</label>
                     <input id="Fecha Cierre" name="Fecha Cierre" placeholder="Fecha Cierre" type="text" required class="form-control" value="{{$actividad->fecha_cierre}}">
                </div>
        </div>


        <div class="row">  
         <div class="form-group col-sm-12 col-md-6 col-lg-6">
            <label  class="form-label" for="text">Fecha Inicio</label>
             <input id="fecha inicio" name="fecha inicio" placeholder="fecha inicio" type="text" required class="form-control" value="{{$actividad->fecha_inicio}}" wire:model="fecha_inicio">
               @error('fecha_inicio') <span class="error">{{ $message }}</span> @enderror
             </div>


           
         
                
              <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label  class="form-label" for="text">Fecha cierre</label>
                <input id="fecha cierre" name="fecha cierre" placeholder="fecha cierre" type="text" required class="form-control" value="{{$actividad->fecha_cierre}}" wire:model="fecha_cierre">
                  @error('fecha_cierre') <span class="error">{{ $message }}</span> @enderror
              </div>

        </div>

            <div class="row">
                 <div class="form-group col-sm-12 col-md-6 col-lg-6">
                    <label  class="form-label" for="text">Hora Inicio</label>
                    <input id="hora inicio" name="hora inicio" placeholder="hora inicio" type="text" required class="form-control" value="{{$actividad->hora_inicio}}" wire:model="hora_inicio">
                    @error('hora_inicio') <span class="error">{{ $message }}</span> @enderror
                </div>

         

                <div class="form-group col-sm-12 col-md-6 col-lg-6">
                     <label  class="form-label" for="text">Hora Finalizacion</label>
                     <input id="hora finalizacion" name="hora finalizacion" placeholder="hora finalizacion" type="text" required class="form-control" value="{{$actividad->hora_finalizacion}}" wire:model="hora_finalizacion">
                     @error('hora_finalizacion') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>

                <div class="row">

                <div class="form-group col-sm-12 col-md-6 col-lg-6">
                    <label  class="form-label" for="text">Entidad Responsable</label>
                    <input id="ent responsable" name="ent responsable" placeholder="ent responsable" type="text" required class="form-control" value="{{$actividad->ent_responsable}}"wire:model="ent_responsable">
                    @error('ent_responsable') <span class="error">{{ $message }}</span> @enderror
                </div>


                 <div class="form-group col-sm-12 col-md-6 col-lg-6">
                    <label class="col-md-8 control-label" for="lugar_id">lugar</label>
                    <div class="col-md-12">

                        <select   id="lugar id" name=" lugar id"class="form-control"  wire:model="lugar_id">
                            @foreach($lugares as $lugar)
                            <option value="{{$lugar->id}}" >{{$lugar->nombre_lugar}}</option>
                           @endforeach
                          </select>
            
                        </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button  type="submit"  wire:click="update"  class=" btn btn-primary">Actualizar Actividad</button>
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