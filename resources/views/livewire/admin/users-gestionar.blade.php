<div>
    <div class="card">

        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="buscar por nombre o documento">
        </div>

        @if($users->count())
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  table-auto  ">
                        <thead class="thead-bg-seccess">
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Tipo</th>
                            <th>Documento</th>
                            <th>F.Nacimiento</th>
                            <th>Telefono</th>
                            <th>Genero</th>
                            <th>Roles</th>

                            <th>opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->apellido}}</td>
                                <td>{{$user->tipo_documento}}</td>
                                <td>{{$user->numero_documento}}</td>
                                <td>{{$user->fecha_nacimiento}}</td>
                                <td>{{$user->telefono}}</td>
                                <td>{{$user->genero}}</td>
                                <td>{{$user->roles_id}}</td>

                                <td >
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-4 ">
                                            <a class="btn btn-primary" href="{{route('admin.users.edit', $user)}}"><i class="far fa-edit"></i></a>
                                        </div>
                                        <div class="col-lg-4 col-sm-4">
                                            <button wire:click="destroy({{$user}})" class="btn btn-primary"><i class="fas fa-trash-alt"></i></button>
                                        </div>
                                        <div class="col-lg-4 col-sm-4">
                                            <button wire:click="destroy({{$user}})" class="btn btn-primary">A</i></button>
                                        </div>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-footer">
                {{$users->links()}}
            </div>

            @else

            <div class="card-body">
                <strong>NINGUN USUARIO COINCIDE CON LA BUSQUEDA!</strong>
            </div>
        @endif
    </div>
</div>
