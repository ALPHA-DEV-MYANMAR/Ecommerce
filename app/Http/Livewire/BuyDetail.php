<?php

namespace App\Http\Livewire;

use App\Models\Buying;
use Livewire\Component;

class BuyDetail extends Component
{
    public $buydetail;
    public function mount(){
        $this->buydetail = Buying::all();
    }

    public function render()
    {
        return view('livewire.buy-detail');
    }
}
