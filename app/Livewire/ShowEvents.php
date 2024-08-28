<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Event;

class ShowEvents extends Component
{
    public function render()
    {
        $events = Event::all();
        return view('livewire.show-events', compact('events'));
    }
}
