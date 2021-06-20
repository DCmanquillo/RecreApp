<?php

namespace App\Http\Livewire\Lugar;

use Livewire\Component;
use App\Models\lugar;

class LugarCreate extends Component
{

public $nombre_lugar, $longitud, $latitud;

protected $rules = [

    'nombre_lugar' => 'required',
    'longitud' => 'required',
    'latitud' => 'required',

];

public function updated($propertyName)
{
    $this->validateOnly($propertyName);
}


    public function render()
    {
        return view('livewire.lugar.lugar-create');
    }


    public function store(){
        $validatedData = $this->validate();
        if ($validatedData) {
        Lugar::create([
        'nombre_lugar' => $this->nombre_lugar,
        'latitud' => $this->latitud,
        'longitud' => $this->longitud,


        ]);
        session()->flash('message', 'lugar registrado correctamente');
    }else {
        printf('holaaa');
    }

      $this->reset(
          [
              'nombre_lugar',
              'latitud',
              'longitud',

          ]);


    }
}
