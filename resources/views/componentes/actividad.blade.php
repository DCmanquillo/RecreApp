@extends('layouts.plantilla')

@section('contenido-principal')


    <table class="table">
        <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Actividades</th>
        <th scope="col">lugar</th>
        <th scope="col">hora</th>
        </tr>
        </thead>
        <tbody>

                {{-- <tr>

                    <td>{{$vrActividad->nombactividad}}</td>
                    <td>{{$vrActividad->imagen}}</td>
                    <td>{{$vrActividad->fecha_inicio}}</td>
                    <td>{{$vrActividad->lugar_id}}</td> --}}


                    <div class="col-sm-4">
                        <div class="card">
                          <div class="card-body bg-info">
                            <img src="" class="w-100">
                        <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-info">Nombre</li>
                        <li class="list-group-item bg-info">Imagen</li>
                        <li class="list-group-item bg-info">Fecha</li>
                        <a href=""> <button type="button" class="btn btn-warning btn-sm">Mi comentario</button></a>

                           <!-- Button trigger modal -->
                           <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Launch demo modal<!doctype html>
                            </button>

                             <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="text" name="comentario" placeholder="Comentario" class="form-control mb-2">
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                      </ul>
                          </div>
                        </div>
                      </div>


                </tr>


    </tbody>
    </table>


@endsection
