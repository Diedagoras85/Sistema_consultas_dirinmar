<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Requerimiento;

class Reportes extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";
    public $search;

    public function render()
    {
        /*$requerimientos = Requerimiento::where('ID','LIKE','%' . $this->search .'%')
                     ->orWhere('NRRun','LIKE','%' . $this->search .'%')
                     ->paginate(8);*/
        return view('livewire.reportes');
        
    }

    public function limpiar_page(){
        $this->reset('page');
    }
    

}




    

    
