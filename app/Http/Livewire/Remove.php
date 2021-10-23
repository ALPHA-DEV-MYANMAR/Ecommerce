<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;

class Remove extends Component
{

    public function mount($id){
        $remove = Cart::find($id);
        $remove->delete();

        return redirect('/addtocartview');
    }

    public function render()
    {
        return view('livewire.remove');
    }
}
