<div>
    <div class="card">

        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="buscar por actividad">
        </div>

        @if($actividades->count())
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  table-auto  ">
                        <thead class="thead-bg-seccess">
                        <tr>
                            <th>Id</th>
                            <th>Nombre Actividad</th>
                            <th>Fecha inicio</th>
                            <th>Fecha cierre</th>
                            <th>Hora inicio</th>
                            <th>Hora finalizacion</th>
                            <th>Entidad responsable</th>
                            <th>lugar</th>


                            <th>Opciones</th>
                        </thead>
                        <tbody>
                        @foreach ($actividades as $actividads)
                            <tr>
                                <td>{{$actividads->id}}</td>
                                <td>{{$actividads->nombactividad}}</td>
                                <td>{{$actividads->fecha_inicio}}</td>
                                <td>{{$actividads->fecha_cierre}}</td>
                                <td>{{$actividads->hora_inicio}}</td>
                                <td>{{$actividads->hora_finalizacion}}</td>
                                <td>{{$actividads->ent_responsable}}</td>
                                <td>{{$actividads->lugar_id}}</td>
                                <td >
                                    <div class="row">

                                        <div class="col-lg-6 col-sm-6 ">
                                            <a class="btn btn-primary" href="{{route('Activ.edit', $actividads)}}"><i class="far fa-edit"></i></a>
                                        </div>


                                        <div class="col-lg-6 col-sm-6">

                                            <button wire:click="destroy({{$actividads}})" class="btn btn-primary"><i class="fas fa-trash-alt"></i></button>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-footer">
                {{$actividades->links()}}
            </div>

            @else

            <div class="card-body">
                <strong>NO EXISTE NINGUNA ACTIVIDAD REGISTRADA!</strong>
            </div>
        @endif
    </div>

</div>
