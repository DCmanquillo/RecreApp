<div>
    <div class="container justify-content-center">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif

        <div class="row">
            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label  class="form-label" for="text">Nombre Actividad</label>
                <input type="nombre actividad" name="nombres" placeholder="Nombre Actividad" type="text" required class="form-control" value=""  wire:model="nombactividad">
                @error('nombactividad') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label  class="form-label" for="text">Fecha Inicio</label>
                <input id="fecha inicio" name="fecha inicio" placeholder="fecha inicio" type="date" required class="form-control" value="" wire:model="fecha_inicio">
                @error('fecha_inicio') <span class="error">{{ $message }}</span> @enderror
            </div>

        </div>

        <div class="row">
            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label  class="form-label" for="text">Fecha Cierre</label>
                <input id="fecha cierre" name="fecha cierre" placeholder="fecha cierre" type="date" required class="form-control" value="" wire:model="fecha_cierre">
                @error('fecha_cierre') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label  class="form-label" for="text">Hora Inicio</label>
                <input id="hora inicio" name="hora inicio" placeholder="hora inicio" type="time" required class="form-control" value="" wire:model="hora_inicio">
                @error('hora_inicio') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label  class="form-label" for="text">Hora Finalizacion</label>
                <input type="time" name="hora finalizacion" placeholder="hora finalizacion"  required class="form-control" value="" wire:model="hora_finalizacion">
                @error('hora_finalizacion') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label  class="form-label" for="text">Entidad Responsable</label>
                <input type="text" id="entidad responsable" name="entidad responsable" placeholder="entidad responsable" type="text" required class="form-control" value="" wire:model="ent_responsable">
                @error('ent_responsable') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label class="form-label " for="lugar_id">lugar</label>
                <select class="form-control"  wire:model="lugar_id">
                    @foreach($lugares as $lugar)
                    <option value="{{$lugar->id}}" >{{$lugar->nombre_lugar}}</option>
                @endforeach
                </select>

            </div>

            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label class="form-label " for="lugar_id">Imagen</label>
                <input type="file" wire:model = "image">
            </div>

        </div>

    </div>






    <div class="card">
        <div class="card-body">
            <div wire:loading wire:target="image" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Imagen cargando!</strong>
                <span class="block sm:inline">Espere hasta que la imagen cargue.</span>

            </div>
            @if ($image)
                <img src = "{{$image->temporaryUrl()}}" >
            @endif
        </div>
    </div>


    <div class="d-flex justify-content-center">
        <button wire:click="store"  wire:loading.attr= "disabled" wire:target="store, image" class=" btn btn-primary">Registrar Actividad</button>
        @error('imagen') <span class="error">{{ $message }}</span> @enderror
    </div>



</div
