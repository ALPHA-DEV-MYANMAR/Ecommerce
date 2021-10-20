<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddToCart extends Component
{

    public function mount($id){

        $user_id = Auth::id();
        $product_id = $id;
        $db_product_id = Cart::where('p_id',$product_id)->where('user_id',$user_id)->first();

        $cart_product = Product::find($id);

        if($db_product_id){
            session()->flash('message', 'you already have been add to card this item 😀');
        }else{
            Cart::create([
                'user_id' => $user_id,
                'p_id' => $product_id,
                'p_name' => $cart_product->name,
                'p_price' => $cart_product->price,
                'p_desc' => $cart_product->description,
                'p_img' => $cart_product->gallery
            ]);
        }

        return redirect(url('product_detail/'.$id));
    }

    public function render()
    {
        return view('livewire.add-to-cart');
    }
}
