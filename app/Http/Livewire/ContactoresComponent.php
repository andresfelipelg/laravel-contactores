<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contactor;

class ContactoresComponent extends Component
{

    public $search;
    public function render()
    {
        $contactores = Contactor::where('codigo','like', '%' . $this->search . '%')->get();

        return view('livewire.contactores-component',compact('contactores'));
    }
}

