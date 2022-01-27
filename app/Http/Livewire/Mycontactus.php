<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Mycontactus extends Component
{
    public function render()
    {
        return view('livewire.mycontactus')->layout('layouts.guest');
    }
}
