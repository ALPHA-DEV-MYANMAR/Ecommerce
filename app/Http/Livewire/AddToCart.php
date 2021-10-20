<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddToCart extends Component
{

    public function mount($id){

        $user_id = Auth::id();
        $product_id = $id;
        $db_product_id = Cart::where('product_id',$product_id)->where('user_id',$user_id)->first();


        if($db_product_id){
            session()->flash('message', 'you already have been add to card this item 😀');
        }else{
            Cart::create([
            'product_id' => $product_id,
            'user_id' => $user_id,
            ]);
        }



        return redirect(url('product_detail/'.$id));
    }

    public function render()
    {
        return view('livewire.add-to-cart');
    }
}
