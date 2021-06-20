<?php

namespace App\Http\Livewire\Instructor;

use Livewire\Component;
use App\Models\perfil_instructor;

class InstCreate extends Component
{

  public $profesion, $disponibilidad, $estado, $registro;

  protected $rules = [

    'profesion' => 'required',
    'estado' => 'required',
    'registro' => 'required',
    'disponibilidad' => 'required',

];

    public function render()
    {
        return view('livewire.instructor.inst-create');
    }

    public function store(){
        $validatedData = $this->validate();
        if ($validatedData) {
       perfil_instructor::create([
        'profesion' => $this->profesion,
        'disponibilidad' => $this->disponibilidad,
        'estado' => $this->estado,
        'registro'=>$this->registro,


        ]);
        session()->flash('message', 'Instructor registrado correctamente');
    }else {
        printf('holaaa');
    }

      $this->reset(
          [
              'profesion',
              'disponibilidad',
              'estado',
              'registro',

          ]);


    }
}
