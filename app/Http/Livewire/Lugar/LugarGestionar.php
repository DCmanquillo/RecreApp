<?php

namespace App\Http\Livewire\Lugar;

use Livewire\Component;
use App\Models\lugar;
use Livewire\WithPagination;

class LugarGestionar extends Component
{

  use WithPagination;

  protected $paginationTheme = "bootstrap";

    public $search;


    public function updatingSearch(){
        $this->resetPage();
    }


    public function render()
    {
    $lugar = Lugar::where('nombre_lugar','LIKE','%'.$this->search.'%')

      ->paginate(6);
      return view ('livewire.lugar.lugar-gestionar', compact('lugar'));
    }


    public function destroy(Lugar $lugar){
        $lugar->delete();
     }

}
