<?php

namespace App\Http\Livewire;

use App\Models\Buying;
use Livewire\Component;

class BallCount extends Component
{

    public $buycount;

    public function mount(){
        $this->buycount = Buying::all()->count();
    }

    public function render()
    {
        return view('livewire.ball-count',[
            'buycount' => $this->buycount
        ]);
    }
}
