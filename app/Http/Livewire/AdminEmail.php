<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cliente;
use App\Models\Clientemail;
use App\Models\Email;
use Livewire\WithPagination;

class AdminEmail extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";
    public $search;
    
    public function render()
    {
        $clientemails = Clientemail::all();
        $emails = Email::all();
        $clientes = Cliente::where('NMCliente','LIKE','%' . $this->search .'%')
                     ->orWhere('NRRun','LIKE','%' . $this->search .'%')
                     ->paginate(8);
        return view('livewire.admin-email', compact('clientes','clientemails','emails'));
    }

    public function limpiar_page(){
        $this->reset('page');
    }
}
