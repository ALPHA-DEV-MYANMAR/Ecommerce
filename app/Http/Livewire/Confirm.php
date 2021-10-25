<?php

namespace App\Http\Livewire;

use App\Models\Buying;
use Livewire\Component;

class Confirm extends Component
{

    public function mount($id){
        $confirm = Buying::findOrFail($id);
        $confirm->delete();

        return redirect('/buydetail');
    }

    public function render()
    {
        return view('livewire.confirm');
    }
}
