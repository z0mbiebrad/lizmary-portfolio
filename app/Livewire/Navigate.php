<?php

namespace App\Livewire;

use Livewire\Component;

class Navigate extends Component
{
    public $route = '';

    public function mount()
    {
        $this->route = request()->route()->getName();
    }

    public function render()
    {
        return view('livewire.navigate');
    }
}
