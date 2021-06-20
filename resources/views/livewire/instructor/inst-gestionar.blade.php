<div>
    <div class="card">

        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="buscar por registro">
        </div>

          @if($instructor->count())
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  table-auto  ">
                        <thead class="thead-bg-seccess">
                        <tr>
                            <th>Id</th>
                            <th>Profesión</th>
                            <th>Estado</th>
                            <th>Registro</th>
                            <th>Disponibilidad</th>


                            <th>opciones</th>
                        </tr>
                        </thead>
                        <tbody>

                     @foreach ($instructor as $perfil_instructors)
                            <tr>
                                <td>{{$perfil_instructors->id}}</td>
                                <td>{{$perfil_instructors->profesion}}</td>
                                <td>{{$perfil_instructors->estado}}</td>
                                <td>{{$perfil_instructors->registro}}</td>
                                <td>{{$perfil_instructors->disponibilidad}}</td>
                            <td >
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 ">
                                            <a class="btn btn-primary" href="{{route('Instructor.edit', $perfil_instructors)}}"><i class="far fa-edit"></i></a>
                                        </div>

                                        <div class="col-lg-6 col-sm-6">

                                            <button wire:click="destroy({{$perfil_instructors}})" class="btn btn-primary"><i class="fas fa-trash-alt"></i></button>
                                        </div>
                                    </div>

                                </td>


                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
   <div class="card-footer">
       {{$instructor->links()}}
   </div>

            @else

            <div class="card-body">
                <strong>NINGUN USUARIO COINCIDE CON LA BUSQUEDA!</strong>
            </div>
        @endif
    </div>
</div>
