<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Myhome extends Component
{
    public function render()
    {
        return view('livewire.myhome')->layout('layouts.guest');
    }
}
