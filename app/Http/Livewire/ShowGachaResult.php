<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;

class ShowGachaResult extends ModalComponent
{
    public array $results = [];

    public function mount($results)
    {
        $this->results = $results;
    }

    public function render()
    {
        return view('livewire.show-gacha-result');
    }
}
