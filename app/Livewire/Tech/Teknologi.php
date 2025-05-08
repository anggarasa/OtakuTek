<?php

namespace App\Livewire\Tech;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.guest')]
class Teknologi extends Component
{
    public function render()
    {
        return view('livewire.tech.teknologi');
    }
}
