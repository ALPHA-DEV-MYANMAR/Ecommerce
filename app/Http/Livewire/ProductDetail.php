<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductDetail extends Component
{
    public $product;

    //Show Single Product
    public function mount($id){

        $this->product = Product::find($id);
        
    }

    public function render()
    {
        return view('livewire.product-detail',[
            'product' => $this->product
        ]);
    }
}
