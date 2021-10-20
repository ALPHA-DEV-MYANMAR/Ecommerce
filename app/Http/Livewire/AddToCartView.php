<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddToCartView extends Component
{

    public $cart_items;

    public function mount(){
        $user_id = Auth::id();
        $this->cart_items = Product::all();
    }

    public function render()
    {
        return view('livewire.add-to-cart-view',[
            'cart_items' => $this->cart_items
        ]);
    }
}
