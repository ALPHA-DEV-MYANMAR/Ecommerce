<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CartCount extends Component
{
    public $cart_count;

    public function mount(){

        $user_id = Auth::id();
        $this->cart_count = Cart::where('user_id',$user_id)->get()->count();
    }

    public function render()
    {
        return view('livewire.cart-count',[
            'cart_count' => $this->cart_count
        ]);
    }
}
