<div>

    <div class="container justify-content-center">

        @if (session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
        @endif
        <div class="row">
            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label  class="form-label" for="text">Nombre</label>
                <input type="nombres" name="nombres" placeholder="Nombres Usuario" type="text" required class="form-control" value=""  wire:model="name">
                @error('name') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label  class="form-label" for="text">Apellido</label>
                <input type="Apellido" name="apellido" placeholder="Apellido Usuario" type="text" required class="form-control" value="" wire:model="apellido">
                @error('apellido') <span class="error">{{ $message }}</span> @enderror
            </div>

        </div>

        <div class="row">

            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label  class="form-label" for="text">tipo de documento</label>
                <input id="tipo de documento" name="tipo de documento" placeholder="tipo de documento" type="text" required class="form-control" value="" wire:model="tipo_documento">
                @error('tipo_documento') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label  class="form-label" for="text">numero de documento</label>
                <input id="numero de documento" name="numero de documento" placeholder="numero de documento" type="text" required class="form-control" value="" wire:model="numero_documento">
                @error('numero_documento') <span class="error">{{ $message }}</span> @enderror
            </div>

        </div>

        <div class="row">
            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label  class="form-label" for="text">Correo Electronico</label>
                <input id="corre electronico" name="correo electronico" placeholder="correo electronico" type="email" required class="form-control" value="" wire:model="email">

                @error('email') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label  class="form-label" for="text">Contraseña</label>
                <input type="password" name="password" placeholder="Contraseña"  required class="form-control" value="" wire:model="password">
                @error('password') <span class="error">{{ $message }}</span> @enderror
            </div>



        </div>

        <div class="row">
            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label  class="form-label" for="text">Télefono</label>
                <input id="Télefono" name="Télefono" placeholder="Télefono" type="text" required class="form-control" value="" wire:model="telefono">
                @error('telefono') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label  class="form-label" for="text">Genero</label>
                <input id="Genero" name="genero" placeholder="genero" type="text" required class="form-control" value="" wire:model="genero">
                @error('genero') <span class="error">{{ $message }}</span> @enderror
            </div>


        </div>

        <div class="row">
            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label  class="form-label" for="text">Fecha Nacimiento</label>
                <input type="text" id="fecha nacimiento" name="fecha nacimiento" placeholder="fecha de nacimiento" type="text" required class="form-control" value="" wire:model="fecha_nacimiento">
                @error('fecha_nacimiento') <span class="error">{{ $message }}</span> @enderror
            </div>
           <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label class="col-md-8 control-label" for="lugar_id">Roles</label>
                <div class="col-md-12">
                    <select class="form-control"  wire:model="roles_id">
                        @foreach($roles as $roles)
                        <option value="{{$roles->id}}" >{{$roles->name}}</option>
                       @endforeach
                        </select>

                </div>
                </div>
        </div>
        <br>

        <div class="d-flex justify-content-center">
            <button wire:click="store"  class=" btn btn-primary">Registar usuario</button>
        </div>

    </div
