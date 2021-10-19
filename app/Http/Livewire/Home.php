<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Home extends Component
{

    public $products;

    public function product_detail($id){

        // $details = Product::find($id);
        
        $this->emit('detail',$id);

    }

    public function mount(){
        $this->products = Product::all();
    }

    public function render()
    {
        return view('livewire.home',[
            'products' => $this->products
        ]);
    }
}
