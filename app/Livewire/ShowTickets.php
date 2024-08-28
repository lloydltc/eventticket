<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Ticket;

class ShowTickets extends Component
{

    public $event;

    public function mount($event){
        $this->event = $event;
    }

    public function render()
    {

        $tickets = Ticket::all();
        return view('livewire.show-tickets', compact('tickets'));
    }
}
