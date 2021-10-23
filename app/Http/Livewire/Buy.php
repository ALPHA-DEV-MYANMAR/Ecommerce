<?php

namespace App\Http\Livewire;

use App\Models\Buying;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class Buy extends Component
{

    public function mount($id){
        $buy = Cart::find($id);
        //Upload to Buying table
        Buying::create([
            'user_name'=> Auth::user()->name,
            'p_name' => $buy->p_name,
            'p_price' => $buy->p_price,
            'p_img' => $buy->p_img,
            'p_count' => '1' 
        ]);

        $buy->delete();

        return redirect()->to(route('addtocartview'));
    }

    public function render()
    {
        return view('livewire.buy');
    }
}
