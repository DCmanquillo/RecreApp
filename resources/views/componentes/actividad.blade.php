@extends('layouts.plantilla')

@section('contenido-principal')
{{-- {{Asset('public/css.acti.css')}} --}}
<link href="{{ asset('css/acti.css') }}" rel="stylesheet">
<div class="container-fluid">
    <div class="row">
        {{-- {{$datosActividad }} --}}
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
                        <p>{{$actividad->fecha_cierre}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
