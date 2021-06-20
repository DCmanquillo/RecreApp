<?php

namespace App\Http\Livewire\Instructor;

use Livewire\Component;
use App\Models\perfil_instructor;
use Livewire\WithPagination;


class InstGestionar extends Component
{

    use WithPagination;

    protected $paginationTheme = "bootstrap";
    public $search;

   


    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $instructor = perfil_instructor::where('registro','LIKE','%'.$this->search.'%')

      ->paginate(2);
        return view('livewire.instructor.inst-gestionar', compact('instructor'));
    }

    public function destroy(perfil_instructor $instructor){
        $instructor->delete();
     }


}
