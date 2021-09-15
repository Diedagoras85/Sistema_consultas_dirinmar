<?php

namespace App\Http\Livewire;

use App\Models\Cliente;
use Livewire\Component;
use Livewire\WithPagination;

class AdminClientes extends Component
{

    use WithPagination;

    protected $paginationTheme = "bootstrap";
    public $search;
    public function render()
    {
        $clientes = Cliente::where('NMCliente','LIKE','%' . $this->search .'%')
                     ->orWhere('NRRun','LIKE','%' . $this->search .'%')
                     ->paginate(8);
        return view('livewire.admin-clientes', compact('clientes'));
    }

    public function limpiar_page(){
        $this->reset('page');
    }
}
