<?php

namespace App\Http\Livewire;

use App\Models\Buying;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddToCartView extends Component
{

    public $cart_items;
    public $buying_items;

    public function mount(){
        $user_id = Auth::id();
        $this->cart_items = Cart::where('user_id',$user_id)->get();
    }


    public function render()
    {
        return view('livewire.add-to-cart-view',[
            'cart_items' => $this->cart_items
        ]);
    }
}
