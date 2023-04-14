<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Event;

class Calendar extends Component
{
    public function render()
    {
        return view('livewire.calendar');
    }
}
