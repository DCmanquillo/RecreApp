<div>
    <div class="container justify-content-center">

        @if (session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
        @endif
        <div class="form-row">
            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label  class="form-label" for="text">Profesion</label>
                <input type="profesion" name="profesion" placeholder="profesion" type="text" required class="form-control" value=""  wire:model="profesion">
                @error('profesion') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label  class="form-label" for="text">Estado</label>
                <input type="lo" name="latitud" placeholder="estado" type="text" required class="form-control" value="" wire:model="estado">
                @error('estado') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label  class="form-label" for="text">Registro</label>
                <input type="text" name="latitud" placeholder="registro" type="text" required class="form-control" value="" wire:model="registro">
                @error('registro') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label  class="form-label" for="text">Disponibilidad</label>
                <input type="text" name="disponibilidad" placeholder="disponibilidad" required class="form-control" value="" wire:model="disponibilidad">
                @error('disponibilidad') <span class="error">{{ $message }}</span> @enderror
            </div>

        </div>

        <div class="d-flex justify-content-center">
            <button wire:click="store"  class=" btn btn-primary">Registar Instructor</button>
        </div>



        </div>
</div>
